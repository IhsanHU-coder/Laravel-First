<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
// use ..\views\home.blade.php;

Route::get('/', [HomeController::class, 'dashboard']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);
Route::get('/dashboard', function () {
    return view('components.admin.dashboard');
});



// Route::get('/home', function () {
//     return view('home', [
//         "judul" => "Home"
//     ]);
// });


// Route::get('/', function () {
//     return view('beranda', [
//         "judul" => "Beranda"
//     ]);
// });

// Route::get('/kontak', function () {
//     return view('kontak', [
//         "judul" => "Kontak"
//     ]);
// });


// Route::get('/profil', function () {
//     return view('profil', [
//         "judul" => "Profil"
//     ]);
// });
