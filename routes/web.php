<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Auth
Route::get('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/login', [AuthController::class, 'postlogin']);

// Landing
Route::get('/', [LandingController::class, 'index']);
Route::get('/detail/kategori/{id}', [LandingController::class, 'detailKategori']);


// middleware group
Route::group(['middleware' => 'IsAdmin'], function () {

    // Auth
    Route::get('/admin/logout', [AuthController::class, 'logout']);
    Route::get('/admin/profil', [AuthController::class, 'profil']);
    Route::post('/admin/profil', [AuthController::class, 'updateprofil']);

    // Dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    // Data
    Route::get('/admin/data', [DataController::class, 'index']);
    Route::post('/admin/data', [DataController::class, 'store']);
    Route::put('/admin/data/{id}', [DataController::class, 'update']);
    Route::delete('/admin/data/{id}', [DataController::class, 'destroy']);

    // Kategori
    Route::get('/admin/kategori', [KategoriController::class, 'index']);
    Route::post('/admin/kategori', [KategoriController::class, 'store']);
    Route::put('/admin/kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy']);
});
