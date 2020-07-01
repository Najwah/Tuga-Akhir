<?php

use App\Http\Controllers\InventarisController;
use App\Peruntukan;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// barang
Route::resource('barang','BarangController');

// sumber dana
Route::resource('sumberDana','SumberDanaController');

// Peruntukan
Route::resource('peruntukan', 'PeruntukanController');

// Lab
Route::resource('lab', 'LabController');

//Dosen
Route::resource('dosen', 'DosenController');

//inventaris tambah lab dan dosen
Route::get('inventaris/dua','InventarisController@createDua')->name('inventaris.createDua');

//inventaris
Route::resource('inventaris', 'InventarisController');
