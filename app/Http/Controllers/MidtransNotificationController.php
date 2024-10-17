<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class MidtransNotificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $payload = $request->all();

        $order_id = $payload['order_id'];
        $status_code = $payload['status_code'];
        $gross_amount = $payload['gross_amount'];

        $req_signature = $payload['signature_key'];

        $signature =  hash('sha512', $order_id.$status_code.$gross_amount.config('midtrans.serverkey'));

        if ($signature != $req_signature) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Invalid signature'
            ], 401); 
        }

        $transaction_status = $payload['transaction_status'];
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

        if ($transaction_status == 'settlement') {
            $transaction->status = $transaction_status;
            $transaction->subscription_start = now()->timestamp;
            $transaction->subscription_end = now()->addDays($subscriptionDay)->timestamp();
            $transaction->payment_method = $payload['payment_type'];
            $transaction->transaction_time = $payload['transaction_time'];
            $transaction->transaction_time = $payload['transaction_time'];
            $transaction->save();

            $user->premium_until = 
        }



    }
}
