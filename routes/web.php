<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //middlewareın içinde olan route'lar kullanıcı tarafından login olmadan görülmez
    Route::get("/deneme",function (){
        return 5;
    });
});
