<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MidtransNotificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function notif(Request $request)
    {
        $order_id = $request->order_id;
        $status_code = $request->status_cod;
        $gross_amount = $request->gross_amount;

        // $req_signature = $request->signature_key;

        // $signature = hash('sha512', $order_id.$status_code.$gross_amount.config('midtrans.serverkey'));

        // if ($signature != $req_signature) {
        //     return response()->json([
        //         'success' => false,
        //         'status' => 'error',
        //         'message' => 'Invalid signature'
        //     ], 401); 
        // }

        $transaction_status = $request->transaction_status;
        $transaction = Transaction::where('order_id', $order_id)->first();
        if (!$transaction) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Order ID not found'
            ], 404);

        }

        $user = User::find($transaction->user_id);
        $subscriptionDay = Subscription::find($transaction->subscription_id)->duration;

        if ($transaction_status == 'settlement' || $transaction_status == 'campture') {

            $transaction->status = $transaction_status;
            
            if ($user->langganan) {
                $transaction->subscription_start = $user->premium_until;
                $transaction->subscription_end = Carbon::parse($user->premium_until)->addDays($subscriptionDay);
                $user->premium_until = Carbon::parse($user->premium_until)->addDays($subscriptionDay);
            } 
            else {
                $transaction->subscription_start = now();
                $transaction->subscription_end = now()->addDays($subscriptionDay);
                $user->premium_until = now()->addDays($subscriptionDay);
            }

            $transaction->payment_method = $request->payment_type;
            $transaction->transaction_time = $request->transaction_time;
            $transaction->save();
            $user->save();

        }

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'success'
        ]);

    }
}
