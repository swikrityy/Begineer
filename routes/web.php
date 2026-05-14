<?php

use App\Http\Controllers\Table;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/table',[TableController::class,'index'])->name('table');

Route::get('/form',[TableController::class,'create'])->name('form');

// store ma post
Route::post('/store',[TableController::class,'store'])->name('store');

Route::get('/show/{id}',[TableController::class,'show'])->name('show');

Route::get('/editpage/{id}',[TableController::class,'edit'])->name('editpage');

Route::post('/update/{id}',[TableController::class,'update'])->name('update');

Route::post('/delete/{id}',[TableController::class,'destroy'])->name('delete');