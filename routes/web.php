<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\KatalogCustomerController::class, 'index']);
Route::get('/lihatjasa', [App\Http\Controllers\KatalogCustomerController::class, 'lihatjasa']);
Route::get('/pesan', [App\Http\Controllers\KatalogCustomerController::class, 'pesan']);
Route::get('/login', [App\Http\Controllers\KatalogCustomerController::class, 'login']);
Route::get('/registrasi', [App\Http\Controllers\KatalogCustomerController::class, 'registrasi']);
Route::get('/tambah_katalog', [App\Http\Controllers\KatalogCustomerController::class, 'tambah_katalog']);
Route::get('/administrasi', [App\Http\Controllers\KatalogCustomerController::class, 'lengkapi_administrasi']);
Route::get('/pemesanan', [App\Http\Controllers\KatalogCustomerController::class, 'pemesanan']);

Route::get('/profilcust', [App\Http\Controllers\KatalogCustomerController::class, 'profilcust']);


