<?php

return [
    'serverKey' => env('MIDTRANS_IS_PRODUCTION') ? env('MIDTRANS_PRODUCTION_SERVER_KEY') : env('MIDTRANS_SANDBOX_SERVER_KEY'),
    'clientKey' => env('MIDTRANS_IS_PRODUCTION') ? env('MIDTRANS_PRODUCTION_CLIENT_KEY') : env('MIDTRANS_SANDBOX_CLIENT_KEY'),
    'isProduction' => env('MIDTRANS_IS_PRODUCTION'),
    'isSanitized' => env('MIDTRANS_IS_SANITIZED'),
    'is3ds' => env('MIDTRANS_IS_3DS')
];