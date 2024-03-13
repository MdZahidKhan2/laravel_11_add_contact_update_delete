<?php

use App\Http\Controllers\PhoneBookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list',[PhoneBookController::class,'index'])->name('contactList');
Route::post('/list/create',[PhoneBookController::class,'create'])->name('creatContact');

Route::get('/list/{id}/edit',[PhoneBookController::class,'showEdit'])->name('showEdit');
Route::post('/list/{id}/edit',[PhoneBookController::class,'edit'])->name('contactEdit');

Route::get('/list/{id}/delete',[PhoneBookController::class,'delete'])->name('ContactDelete');