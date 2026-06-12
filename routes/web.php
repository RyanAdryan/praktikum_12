<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

// anggota 
Route::resource('anggota', AnggotaController::class);
// Route::get('/anggota', function () {
//     return view('anggota.index');
// });


