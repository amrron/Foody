<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodRecordController;
use App\Http\Controllers\MidtransNotificationController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    // Route untuk user yang sudah login dan email terverifikasi
    Route::middleware(['auth:sanctum', 'email_verified'])->group(function(){
        Route::controller(UserController::class)->group(function(){
            Route::put('/user', 'update');
            Route::put('/user/password', 'resetPassword');
            Route::post('/user/image', 'updateImage');
            Route::post('/user/report', 'reportPdf');
            Route::get('/user/summary', 'summary');
            Route::delete('/user/image', 'removeImage');
        });

        Route::controller(BmiController::class)->group(function(){
            Route::post('/bmi', 'store');
            Route::get('/bmi/recent', 'recent');
            Route::get('/bmi/history', 'history');
            Route::get('/bmi/chart', 'chart');
            Route::delete('/bmi/{bmi}', 'destroy');
        });

        Route::controller(FoodRecordController::class)->group(function(){
            Route::post('/catatanku', 'store');
            Route::get('/catatanku/daily', 'daily');
            Route::get('/catatanku/history', 'history');
            Route::get('/catatanku/{tanggal}', 'tanggal');
            Route::delete('/catatanku/{foodRecord}', 'destroy');
        });

        Route::controller(FoodController::class)->group(function(){
            Route::get('/makanan', 'index');
            Route::get('/makanan/rekomendasi', 'recommendation');
            Route::get('/makanan/{food}', 'show');
            Route::post('/makanan/create', 'create');
            Route::post('/makanan/generate', 'generate');
        });

        Route::controller(TransactionController::class)->group(function(){
            Route::post('/transaksi', 'store');
            Route::get('/transaksi', 'index');
        });

        Route::controller(SubscriptionsController::class)->group(function() {
            Route::get('/langganan', 'index');
        });
    });

    // Route untuk user yang sudah login tapi email belum terverifikasi
    Route::middleware(['auth:sanctum'])->group(function(){
        Route::controller(EmailVerificationController::class)->group(function(){
            Route::post('/email-verification', 'verification');
            Route::post('/resend-otp', 'resend_otp');
        });

        Route::controller(UserController::class)->group(function(){
            Route::put('/user', 'update');
            Route::get('/user', 'profile');
            Route::post('/user/logout', 'logout');
        });
    });

    // Route untuk user yang belum login
    Route::controller(UserController::class)->group(function(){
        Route::post('/user', [UserController::class, 'register']);
        Route::post('/user/login', [UserController::class, 'login']);
    });

    Route::post('/midtrans/notif-hook', [MidtransNotificationController::class, 'notif']);
    Route::get('/transaksi/bayar/{transaction}', [TransactionController::class, 'pay']);
    Route::get('/transaksi/sukses', [TransactionController::class, 'success']);
});
