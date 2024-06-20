<?php

use App\Http\Controllers\KatalogCustomerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\KatalogCustomerController::class, 'index']);
Route::get('/lihatjasa', [App\Http\Controllers\KatalogCustomerController::class, 'lihatjasa']);
Route::get('/pesan', [App\Http\Controllers\KatalogCustomerController::class, 'pesan']);
Route::get('/tambah_katalog', [App\Http\Controllers\KatalogCustomerController::class, 'tambah_katalog'])->name('catalog.create');
Route::post('/tambah-katalog', [KatalogCustomerController::class, 'store_catalogs'])->name('catalog.store');
Route::get('/administrasi', [App\Http\Controllers\KatalogCustomerController::class, 'lengkapi_administrasi']);
Route::get('/pemesanan', [App\Http\Controllers\KatalogCustomerController::class, 'pemesanan']);
Route::get('/dp', [App\Http\Controllers\KatalogCustomerController::class, 'dp']);
Route::get('/pelunasan', [App\Http\Controllers\KatalogCustomerController::class, 'pelunasan']);
Route::get('/status_pemesanan', [App\Http\Controllers\KatalogCustomerController::class, 'status_pesanan']);
Route::get('/reviewcustomer', [App\Http\Controllers\KatalogCustomerController::class, 'review_customer']);
Route::get('/lihatjasa_pj', [App\Http\Controllers\KatalogCustomerController::class, 'lihatjasa_pj']);

Route::get('/dashboard', [App\Http\Controllers\KatalogCustomerController::class, 'dashboard']);
Route::get('/wishlist', [App\Http\Controllers\KatalogCustomerController::class, 'wishlist']);

Route::get('/profilcust', [App\Http\Controllers\KatalogCustomerController::class, 'profilcust']);
Route::get('/datapesanan', [App\Http\Controllers\KatalogCustomerController::class, 'datapesanan']);
Route::get('/review', [App\Http\Controllers\KatalogCustomerController::class, 'review']);
Route::get('/helpcenter', [App\Http\Controllers\KatalogCustomerController::class, 'helpcenter']);
Route::get('/notifikasi', [App\Http\Controllers\KatalogCustomerController::class, 'notifikasi']);

// login - regirster
Route::get('/login', [App\Http\Controllers\KatalogCustomerController::class, 'login']);
Route::post('/login', [App\Http\Controllers\AuthLoginController::class,'auth']);
Route::get('/registrasi', [App\Http\Controllers\KatalogCustomerController::class, 'registrasi']);
Route::post('/registrasi', [App\Http\Controllers\AuthLoginController::class,'create']);
