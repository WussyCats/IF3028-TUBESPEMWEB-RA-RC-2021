<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporancontroller;

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

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [laporancontroller::class,'index']);
Route::get('/create', [laporancontroller::class,'create']);
Route::post('/store', [laporancontroller::class,'store']);
Route::get('/show/{id}', [laporancontroller::class,'show']);
Route::get('/show2/{id}', [laporancontroller::class,'show2']);
Route::post('/update/{id}', [laporancontroller::class,'update']);
Route::get('/destroy/{id}', [laporancontroller::class,'destroy']);