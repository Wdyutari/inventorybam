<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

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

// Aut
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'loginProses'])->name('login-proses');
Route::get('/logout-proses', [LoginController::class, 'logoutProses'])->name('logout-proses');

// Reports
Route::get('/reports/head-office', [ReportsController::class, 'HeadOffice']);
Route::get('/reports/klinik', [ReportsController::class, 'Klinik']);

// Master Data
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/master-data/m-inventori', [MasterController::class, 'mInventori'])->name('minventori');
    Route::get('/', [HomeController::class, 'InputData'])->name('dashboard');
    Route::get('/input-data', [HomeController::class, 'InputData'])->name('input-data');

    // Reports
    Route::get('/reports/head-office', [ReportsController::class, 'HeadOffice'])->name('reports-head-office');
    Route::get('/reports/klinik', [ReportsController::class, 'Klinik'])->name('reports-klinik');
    Route::get('/reports/rs', [ReportsController::class, 'Rs'])->name('rs');


    // Master Data
    Route::get('/master-data/unit-kerja', [MasterController::class, 'unitKerja']);
});

