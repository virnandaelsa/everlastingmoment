<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\KatalogCustomerController::class, 'index']);
Route::get('/lihatjasa', [App\Http\Controllers\KatalogCustomerController::class, 'lihatjasa']);
Route::get('/pesan', [App\Http\Controllers\KatalogCustomerController::class, 'pesan']);
