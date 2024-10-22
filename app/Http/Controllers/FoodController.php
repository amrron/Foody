<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\FoodResource;
use App\Http\Requests\GenerateFoodRequest;
use LDAP\Result;
use OpenAI\Laravel\Facades\OpenAI;
use PhpParser\Node\Stmt\Return_;

class FoodController extends Controller
{
    public function index() {
        $foods = Food::filter(request(['search', 'protein', 'karbohidrat', 'garam', 'gula', 'lemak', 'kategori']))->get();

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Data makanan',
            'data' => FoodResource::collection($foods)
        ], 201);
    }

    public function create(GenerateFoodRequest $request) {

        $user = auth()->user();

        if (!$user->langganan) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'error' => 'Gagal membuat data makanan',
                'message' => 'Fitur ini khusus pengguna premium'
            ], 401);
        }

        $validatedRequest = $request->validated();

        $compilation = $this->aIgenerate($request->makanan, $request->detail ?? '');

        if (!count($compilation['choices'])) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal membuat data makanan',
                'error' => 'Kesalahan dalam menghasilkan data makanan'
            ], 501);
        }

        $data = json_decode($compilation['choices'][0]['message']['content'], true);

        $slug = Str::slug($data['nama']);
        $data['slug'] = $slug;

        $foodExist = Food::where('slug', 'LIKE', $slug)->count();

        try {
            DB::beginTransaction();

            $food = new Food();
            $food->nama = $data['nama'];
            $food->deskripsi = $data['deskripsi'];
            $food->slug = $data['slug'];
            $food->karbohidrat = $data['karbohidrat'];
            $food->protein = $data['protein'];
            $food->lemak = $data['lemak'];
            $food->garam = $data['garam'];
            $food->gula = $data['gula'];

            
            if (!$foodExist) {
                $food->save();
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil membuat data makanan',
                'data' => new FoodResource($food)
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal membuat data makanan',
                'error' => $th->getMessage()
            ], 501);
        }
    }

    public function show(Food $food) {
        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Data makanan',
            'data' => new FoodResource($food)
        ], 201);
    }

    public function generate(GenerateFoodRequest $request) {

        $user = auth()->user();

        // if (!$user->langganan) {
        //     return response()->json([
        //         'success' => false,
        //         'status' => 'error',
        //         'error' => 'Gagal membuat data makanan',
        //         'message' => 'Fitur ini khusus pengguna premium'
        //     ], 401);
        // }

        $validatedRequest = $request->validated();

        $compilation = $this->aIgenerate($request->makanan, $request->detail ?? '');

        if (!count($compilation['choices'])) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal membuat data makanan',
                'error' => 'Kesalahan dalam menghasilkan data makanan'
            ], 501);
        }

        $data = json_decode($compilation['choices'][0]['message']['content'], true);

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Berhasil membuat data makanan',
            'data' => $data
        ], 201);
    }

    private function aIgenerate($makanan, $detail) {
        $compilation = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "Kamu akan menyediakan data kandungan makanan berdasarkan nama makanan yang diberikan. Detail makanan juga diberikan untuk mendapatkan kandungan makanan yang lebih akurat. Kandungan makanan tersebut meliputi karbohidrat, protein, garam, gula, lemak, dan deskripsi kurang dari 20 kata. Deskripsi tersebut harus umum dan tidak menyebutkan detail lauk atau bahan. Hasilkan dalam format JSON seperti: {'nama': 'nama makanan', 'karbohidrat': 20, 'protein': 9, 'lemak': 14, 'gula': 8, 'garam': 3, 'deskripsi': 'deskripsi dari makanan'}."
                ],
                [
                    'role' => 'user', 
                    'content' => $makanan . ': ' . $detail
                ]
            ],
            'max_tokens' => 150,
            'response_format' => [
                'type' => 'json_object'
            ]
        ]);

        return $compilation;
    }
}
