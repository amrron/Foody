<?php

namespace App\Http\Controllers;

use App\Models\FoodRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateFoodRecordRequest;
use App\Http\Resources\FoodRecordResource;
use Carbon\Carbon;

class FoodRecordController extends Controller
{
    public function store(CreateFoodRecordRequest $request) {
        $validatedFoodRecord = $request->validated();
        $validatedFoodRecord['user_id'] = auth()->id();
        $validatedFoodRecord['waktu'] = Carbon::now()->toDateString() . ' ' . $validatedFoodRecord['waktu'];

        $user = auth()->user();
        $foods = FoodRecord::where('user_id', $user->id)->whereDate('created_at', now())->count();

        if ($foods > 1 && !$user->langganan) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'error' => 'Gagal membuat catatan makanan',
                'message' => 'Fitur catatan makanan hanya bisa digunakan dua kali dalam sehari untuk pengguna non premium.'
            ], 401);
        }

        try {
            DB::beginTransaction();

            $foodRecord = FoodRecord::create($validatedFoodRecord);
        
            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil membuat data catatan makanan',
                'data' => new FoodRecordResource($foodRecord)
            ], 201);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal membuat data catatan makanan',
                'error' => $th->getMessage()
            ], 401);
        }

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Berhasil membuat data catatan makanan'
        ], 201);
    }

    public function daily() {
        $foodRecord = FoodRecord::where('user_id', auth()->id())->whereDate('waktu', Carbon::now()->toDateString())->get();

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => $this->chart(),
            'data' => FoodRecordResource::collection($foodRecord)
        ], 201);
    }

    public function history() {
        $groupedFoodRecord = FoodRecord::where('user_id', auth()->id())->get()->sortByDesc('waktu')->groupBy('tanggalWaktu');

        $data = [];

        foreach ($groupedFoodRecord as $tanggal => $foodRecords) {
            $data[] = [
                'tanggal' => $tanggal,
                'data' => FoodRecordResource::collection($foodRecords)
            ];
        }

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Data catatan makanan',
            'data' => $data
        ], 201);
    }

    public function tanggal($tanggal) {
        $foodRecord = FoodRecord::where('user_id', auth()->id())->whereDate('waktu', $tanggal)->get();

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Data catatan makanan tanggal ' . $tanggal,
            'data' => FoodRecordResource::collection($foodRecord)
        ], 201);
    }

    public function destroy(FoodRecord $foodRecord) {
        try {
            DB::beginTransaction();

            $foodRecord->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil menghapus data catatan makanan'
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal menghapus data catatan makanan',
                'error' => $th->getMessage()
            ], 401);
        }
    }

    private function chart() {
        
        $data = [
            "labels" => ["Karbohidrat", "Protein", "Garam", "Gula", "Lemak"],
            "datasets" => [
                [
                    "label" => "Dataset 1",
                    "data" => [round(auth()->user()->dailyKarbo, 1), round(auth()->user()->dailyProtein, 1), round(auth()->user()->dailyGaram, 1), round(auth()->user()->dailyGula, 1), round(auth()->user()->dailyLemak, 1)],
                    "backgroundColor" => [
                        "rgb(51, 161, 77)",
                        "rgb(219, 243, 251)",
                        "rgb(253, 206, 208)",
                        "rgb(17, 17, 17)",
                        "rgb(202, 200, 230)",
                    ],
                ],
            ],
        ];

        $config = [
            "type" => "doughnut",
            "data" => $data,
            "options" => [
                "responsive" => true,
                "plugins" => [
                    "legend" => [
                        "position" => "top",
                        "display" => false
                    ],
                    "title" => ["display" => false],
                    "doughnutlabel" => [
                        "labels" => [
                            [ "text" => auth()->user()->dailyKarbohidrat + auth()->user()->dailyProtein + auth()->user()->dailyGaram + auth()->user()->dailyGula + auth()->user()->dailyLemak, "font" => [ "size" => 20 ] ], 
                            [ "text" => 'total' ]
                        ],
                    ],
                ],
            ],
        ];

        $link = "https://quickchart.io/chart?v=4&bkg=white&width=300&height=300&f=png&c=" . json_encode($config);

        return $link;
    }

}
