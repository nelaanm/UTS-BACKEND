<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login70Controller;
use App\Http\Controllers\Data70Controller;
use App\Http\Controllers\Agama70Controller;

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
    return view('registeruserbaru70');
});


// Login & Register
Route::get('/registeruserbaru70', [login70Controller::class, 'registeruserbaru70']);
Route::post('/prosesregisteruserbaru70', [login70Controller::class, 'prosesregisteruserbaru70']);
Route::get('/loginuserbaru70', [login70Controller::class, 'loginuserbaru70'])->name("loginuserbaru70");
Route::post('/prosesloginuserbaru70', [login70Controller::class, 'prosesloginuserbaru70']);
Route::get('/logoutuserbaru70', [login70Controller::class, 'logoutuserbaru70']);

// Data
Route::get('/data70', [Data70Controller::class, 'data70'])->middleware('auth');
Route::get('/tambah70', [Data70Controller::class, 'addPenduduk70']);
Route::post('/prosestambah70', [Data70Controller::class, 'prosestambah70']);
Route::get('/edit70/{id_penduduk}', [Data70Controller::class, 'editData70']);
Route::get('/delete70/{id_penduduk}', [Data70Controller::class, 'hapus70']);
Route::post('/update70/{id_penduduk}', [Data70Controller::class, 'ganti70']);

// Agama
Route::get('/tambahagama70', [Agama70Controller::class, 'addAgama70']);
