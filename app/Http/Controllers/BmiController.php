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
}
