<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    });
});

Route::get('/download', function(){
    return response()->download(public_path("/app/Foody.apk"));
});