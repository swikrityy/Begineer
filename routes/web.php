<?php

use App\Http\Controllers\Table;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/table',[TableController::class,'index'])->name('table');