<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::prefix('admin')->group(function () {
        
    Route::middleware(['auth'])->group(function () {
    
        Route::controller(AdminController::class)->group(function(){
            Route::get('/', 'index');
            Route::post('/logout', 'logout');
        });

    });

    Route::post('/login', [AdminController::class, 'login'])->name('login');

    Route::get('/login', function(){
        return view('pages.admin.login');
    })->name('login');


});


Route::get('/download', function(){
    return response()->download(public_path("/app/Foody.apk"));
});