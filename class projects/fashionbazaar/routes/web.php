<?php

use App\Http\Controllers\CategoriesControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('frontend.home');
    });
    Route::prefix('/product')->group(function () {

        Route::get('/show/{id}', [ProductController::class, 'showOne'])->name('pro.show');
        Route::get('/list', [ProductController::class, 'showList'])->name('pro.list');
//        Route::get('/add', [CategoriesControler::class, 'create'])->name('pro.add');
//        Route::post('/add', [CategoriesControler::class, 'store'])->name('pro.store');
//        Route::get('/edit/{id}', [CategoriesControler::class, 'edit'])->name('pro.edit');
//        Route::post('/update', [CategoriesControler::class, 'update'])->name('pro.update');
//        Route::get('/delete/{id}', [CategoriesControler::class, 'delete'])->name('pro.delete');
    });
});


Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/tables', [DashboardController::class, 'tables']);
    Route::get('/billing', [DashboardController::class, 'billing']);
    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::prefix('/product')->group(function () {
        Route::get('/add', [DashboardController::class, 'addProduct'])->name('addProduct');
    });
    Route::prefix('/category')->group(function () {
        Route::get('/list', [CategoriesControler::class, 'index'])->name('cat.list');
        Route::get('/add', [CategoriesControler::class, 'create'])->name('cat.add');
        Route::post('/add', [CategoriesControler::class, 'store'])->name('cat.store');
        Route::get('/edit/{id}', [CategoriesControler::class, 'edit'])->name('cat.edit');
        Route::post('/update', [CategoriesControler::class, 'update'])->name('cat.update');
        Route::get('/delete/{id}', [CategoriesControler::class, 'delete'])->name('cat.delete');
    });

});
