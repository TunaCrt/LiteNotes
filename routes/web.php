<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/notes',[NoteController::class, 'index'])->name('notes_index');


//jetstream
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

//Test routeları başlangıç

    Route::get('/mastertest',function (){
        return view('front.layouts.master');
    });
//Test routeları bitiş

