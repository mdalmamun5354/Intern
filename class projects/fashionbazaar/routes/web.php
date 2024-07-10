<?php

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

Route::get('/', function () {
    return view('frontend.home');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/tables', [\App\Http\Controllers\DashboardController::class, 'tables']);
    Route::get('/billing', [\App\Http\Controllers\DashboardController::class, 'billing']);
    Route::get('/profile', [\App\Http\Controllers\DashboardController::class, 'profile']);
    Route::prefix('/product')->group(function () {
        Route::get('/add', [\App\Http\Controllers\DashboardController::class, 'addProduct'])->name('addProduct');
    });

});
