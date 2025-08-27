<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
// use ..\views\home.blade.php;

Route::get('/', [ProfilController::class, 'index']);
Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [ProfilController::class, 'kontak']);
Route::get('/home', [ProfilController::class, 'home']);
