<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubscriptionResource;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index() {
        $subscriptions = Subscription::all();

        return response()->json([
            'success' => true,
            'status' => 'success',
            'data' => SubscriptionResource::collection($subscriptions)
        ]);
    }
}
