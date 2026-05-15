<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Table;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('Table/table',[TableController::class,'index'])->name('table');

Route::get('Table/form',[TableController::class,'create'])->name('form');

// store ma post
Route::post('Table/store',[TableController::class,'store'])->name('store');

Route::get('Table/show/{id}',[TableController::class,'show'])->name('show');

Route::get('Table/editpage/{id}',[TableController::class,'edit'])->name('editpage');

Route::post('Table/update/{id}',[TableController::class,'update'])->name('update');

Route::post('Table/delete/{id}',[TableController::class,'destroy'])->name('delete');



//blog
Route::get('/blogtable',[BlogController::class,'index'])->name('blogtable');

Route::get('/blogform',[BlogController::class,'create'])->name('blogform');
Route::post('/blogstore',[BlogController::class,'store'])->name('blogstore');

Route::get('/blogshow/{id}',[BlogController::class,'show'])->name('blogshow');

Route::get('/blogedit/{id}',[BlogController::class,'edit'])->name('blogedit');

Route::post('/blogupdate/{id}',[BlogController::class,'update'])->name('blogupdate');

Route::post('/blogdelete/{id}',[BlogController::class,'destroy'])->name('blogdelete');