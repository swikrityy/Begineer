<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TableController;
use App\Models\Home;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $homepage = Home::first();
    $services = Service::all();

    return view('home', compact('homepage', 'services'));
});



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [NewController::class, 'dashboard'])
        ->name('dashboard');

    // Table CRUD
    Route::get('/table', [TableController::class, 'index'])->name('table');
    Route::get('/table/form', [TableController::class, 'create'])->name('form');
    Route::post('/table/store', [TableController::class, 'store'])->name('store');
    Route::get('/table/show/{id}', [TableController::class, 'show'])->name('show');
    Route::get('/table/edit/{id}', [TableController::class, 'edit'])->name('editpage');
    Route::post('/table/update/{id}', [TableController::class, 'update'])->name('update');
    Route::post('/table/delete/{id}', [TableController::class, 'destroy'])->name('delete');

    // Blog CRUD
    Route::get('/blogtable', [BlogController::class, 'index'])->name('blogtable');
    Route::get('/blogform', [BlogController::class, 'create'])->name('blogform');
    Route::post('/blogstore', [BlogController::class, 'store'])->name('blogstore');
    Route::get('/blogshow/{id}', [BlogController::class, 'show'])->name('blogshow');
    Route::get('/blogedit/{id}', [BlogController::class, 'edit'])->name('blogedit');
    Route::post('/blogupdate/{id}', [BlogController::class, 'update'])->name('blogupdate');
    Route::post('/blogdelete/{id}', [BlogController::class, 'destroy'])->name('blogdelete');

    // Resource Controllers
    Route::resource('product', ProductController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('home', HomeController::class);
    Route::resource('services', ServiceController::class);
});