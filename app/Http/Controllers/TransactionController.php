<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Http\Resources\TransactionResource;
use App\Models\Subscription;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function store(TransactionRequest $request) {
        $validateTransaction = $request->validated();

        try {
            DB::beginTransaction();

            $user = auth()->user();
            $subscription = Subscription::findOrFail($validateTransaction['subscription_id']);
            $order_id = $this->generateOrderNumber();

            $item_details = [[
                'id' => $subscription->id,
                'price' => $subscription->price,
                'quantity' => 1,
                'name' => $subscription->name,
                'brand' => config('app.name'),
                'category' => 'Subscription',
                'marchant_name' => config('app.name')
            ]];

            $transaction_details = [
                'order_id' => $order_id,
                'gross_amount' => $subscription->price
            ];

            $params = [
                'transaction_details' => $transaction_details,
                'item_details' => $item_details
            ];
            
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.serverKey');

            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = config('midtrans.isProduction');

            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');

            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = config('midtrans.is3ds');

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            $transaction = new Transaction();

            $transaction->user_id = $user->id;
            $transaction->order_id = $order_id;
            $transaction->status = 'pending';
            $transaction->subscription_id = $subscription->id;
            $transaction->snap_token = $snapToken;
            $transaction->gross_amount = $subscription->price;
            $transaction->save();

            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'data' => new TransactionResource($transaction)
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => $th->getMessage()
            ], 401);
        }
    }

    private function generateOrderNumber() {
        $prefix = "ORD-"; // Bisa menggunakan prefix seperti "ORD" untuk membedakan jenis order
        $randomNumber = rand(100000, 999999); // Angka acak 6 digit
        $orderNumber = $prefix . $randomNumber;
        return $orderNumber;
    }

    public function pay($snap_token) {
        $client_key = config('midtrans.clientKey');
        $is_production = config('midtrans.isProduction');
        return view('transaksi.pay', compact('snap_token', 'client_key', 'is_production'));
    }
}
