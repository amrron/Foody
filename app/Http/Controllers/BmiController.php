<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\BmiResourece;
use App\Http\Requests\CreateBmiRequest;

class BmiController extends Controller
{
    public function store(CreateBmiRequest $request) {
        $validatedBmi = $request->validated();
        $validatedBmi['user_id'] = auth()->id();

        $user = auth()->user();

        $bmis = Bmi::where('user_id', $user->id)->whereDate('created_at', now())->count();
        
        if ($bmis > 0 && !$user->langganan) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'error' => 'Gagal menghitung BMI',
                'message' => 'Fitur BMI hanya bisa digunakan sekali dalam sehari untuk pengguna non premium.'
            ], 401);
        }

        try {
            DB::beginTransaction();
            
            $bmi = Bmi::create($validatedBmi);

            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil membuat data bmi',
                'data' => new BmiResourece($bmi)
            ], 201);

        } catch (\Throwable $th) {
            DB::rollback();

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal membuat data bmi',
                'error' => $th->getMessage()
            ], 501);
        }
    }

    public function recent() {
        $bmi = Bmi::where('user_id', auth()->id())->latest()->get()->take(3);

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Data bmi terbaru',
            'data' => BmiResourece::collection($bmi)
        ], 200);
    }

    public function history() {
        $groupedBmi = Bmi::where('user_id', auth()->user()->id)->get()->sortByDesc('created_at')->groupBy('tanggalWaktu');

        $data = [];

        foreach ($groupedBmi as $tanggal => $bmis) {
            array_push($data, [
                'hari' => Carbon::parse($tanggal)->locale('id')->dayName,
                'tanggal' => $tanggal,
                'data' => BmiResourece::collection($bmis)
            ]);
        }

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Data bmi terbaru',
            'data' => $data
        ], 200);
    }

    public function destroy(Bmi $bmi) {
        if (Bmi::where('user_id', auth()->id())->count() < 2) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Tidak dapat menghapus satu-satunye bmi',
            ], 401);
        }

        try {
            DB::beginTransaction();

            $bmi->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil menghapus data bmi',
            ], 201);

        } catch (\Throwable $th) {
            DB::rollback();

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal menghapus data bmi',
                'error' => $th->getMessage()
            ], 501);
        }
    }

    public function apichart() {

        $labels = Bmi::where('user_id', auth()->user()->id)->orderBy('created_at')->pluck('created_at')->toArray();
        if(count($labels) < 2) {
            array_push($labels, date('Y-m-d'));
        }
        $bmi = Bmi::where('user_id', auth()->user()->id)->get()->sortBy('created_at');

        
        $nilai = [];
        foreach($bmi as $bm) {
            array_push($nilai, $bm->nilai);
        }
        $value = $nilai;

        $labels2 = [];
        foreach($labels as $lab) {
            array_push($labels2, date('Y-m-d', strtotime($lab)));
        }

        $data = [
            'labels' => $labels2,
            'datasets' => [
                [
                    'label' => 'Nilai BMI',
                    'borderColor' => 'rgba(23, 24, 79)',
                    'backgroundColor' => 'rgba(255, 255, 255)',
                    'data' => $value,
                    'type' => 'line',
                    'tension' => 0,
                    'fill' => false
                ],
                [
                    'label' => 'Berat Badan Kurang',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('berat_badan')) + 1, 18.5),
                    'backgroundColor' => 'rgba(28, 195, 232)',
                    'borderColor' => 'rgb(28, 195, 232)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Berat Badan Normal',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('berat_badan')) + 1, 24.9),
                    'backgroundColor' => 'rgba(43, 194, 70)',
                    'borderColor' => 'rgb(43, 194, 70)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Kelebihan Berat Badan',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('berat_badan')) + 1, 29.9),
                    'backgroundColor' => 'rgba(219, 190, 22)',
                    'borderColor' => 'rgb(219, 190, 22)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas I',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('berat_badan')) + 1, 34.9),
                    'backgroundColor' => 'rgba(219, 104, 22)',
                    'borderColor' => 'rgb(219, 104, 22)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas II',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('berat_badan')) + 1, 39.9),
                    'backgroundColor' => 'rgba(214, 45, 26)',
                    'borderColor' => 'rgb(214, 45, 26)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas III',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('berat_badan')) + 1, 45),
                    'backgroundColor' => 'rgb(214, 26, 26)',
                    'borderColor' => 'rgb(214, 26, 26)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                
            ],
        ];
        
        $setup = [
            "type" => "line",
            "data" => $data,
            "options" => [
                "responsive" => true,
                "maintainAspectRatio" => false,
                "plugins" => ["legend" => ["position" => "top"]],
                "scales" => ["x" => ["display" => false]],
            ]
        ];

        $link = "https://quickchart.io/chart?v=4&bkg=rgb(217, 244, 255)&f=svg&c=" . json_encode($setup);
        return $link;
    }
}
