<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [LaporController::class,'utama']);
Route::get('/buat', [LaporController::class,'buat']);
Route::get('/edit/{id}', [LaporController::class,'edit']);
Route::post('/simpan', [LaporController::class,'simpan']);
Route::get('/detail/{id}', [LaporController::class,'detail']);
Route::post('/update/{id}', [LaporController::class,'update']);
Route::get('/hapus/{id}', [LaporController::class,'hapus']);