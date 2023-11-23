<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportsController;
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

Route::get('/', [HomeController::class, 'InputData']);
Route::get('/cetak-data', [HomeController::class, 'CetakData']);
Route::get('/referensi', [HomeController::class, 'Referensi']);

// Reports
Route::get('/report/head-office', [ReportsController::class, 'HeadOffice']);

// Master Data
Route::get('/master/referensi', [HomeController::class, 'referensi']);




