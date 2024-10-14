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
}
