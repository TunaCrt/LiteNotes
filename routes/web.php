<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/notes',[NoteController::class, 'index'])->name('notes_index');
Route::get('/notes/create',[NoteController::class, 'create'])->name('notes_create');//create
Route::post('/notes/addNote',[NoteController::class, 'store'])->name('notes_addNote');//store


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

