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

        $validatedRequest = $request->validated();

        $compilation = $this->aIgenerate($request->makanan);

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

    private function aIgenerate($makanan) {
        $compilation = openai::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "kamu akan menyediakan data kandungan makanan berdasarkan nama makanan yang diberikan. detail makanan juga diberikan untuk mendapatkan kandungan makanan yang lebih akurat. kandungan makanan tersebut meliputi karbohidrat, protein, garam, gula, lemak, dan deskripsi kurang dari 20 kata. deskripsi tersebut harus umum dan tidak menyebutkan detail lauk atau bahan. hasilkan dalam format json seperti: {'nama': 'nama makanan', 'karbohidrat': 20, 'protein': 9, 'lemak': 14, 'gula': 8, 'garam': 3, 'deskripsi': 'deskripsi dari makanan'}."
                ],
                [
                    'role' => 'user',
                    'content' => $makanan
                ]
            ],
            'max_tokens' => 200,
            'response_format' => [
                'type' => 'json_object'
            ]
        ]);

        return $compilation;
    }

    public function aIRecommendation() {
        $user = auth()->user();
        $kondisi_user = "Saya seorang $user->jenis_kelamin berusia $user->usia tahun dengan tinggi badan $user->tinggi_badan cm dan berat badan $user->berat_badan kg. Saya sudah mengkonsumsi makanan dengan total karbohidart $user->daily_karbohidrat g, protein $user->daily_protein g, lemak $user->daily_lemak g, garam $user->daily_garam g, dan gula $user->daily_gula g. Batas konsumsi kandungan nutris karbohidrat saya $user->batas_karbohidrat g, protein $user->batas_protein g, lemak $user->batas_lemak g, garam $user->batas_garam, dan gula $user->batas_gula g. Saya ingin mengetahui rekomendasi makanan yang sesuai dengan kondisi saya.";

        $compilation = openai::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "Kamu adalah seorang ahli dalam bidang gizi makanan. Kamu akan diberikan data dan kondisi seseorang. Berikan rekomendasi makanan yang sesuai dengan kondisi tersebut. Data makanan yang diberikan meliputi karbohidrat, protein, garam, gula, lemak, dan deskripsi kurang dari 30 kata. Deskripsi tersebut harus umum dan tidak menyebutkan detail lauk atau bahan. Hasilkan dalam format json seperti: {'nama': 'nama makanan', 'karbohidrat': 20, 'protein': 9, 'lemak': 14, 'gula': 8, 'garam': 3, 'deskripsi': 'deskripsi dari makanan'}."
                ],
                [
                    'role' => 'user',
                    'content' => $kondisi_user
                ]
            ],
            'max_tokens' => 200,
            'response_format' => [
                'type' => 'json_object'
            ]
        ]);

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
}
