<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelanggarController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\KamiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/login-debug', function () {
    if (class_exists(LoginController::class)) {
        return 'LoginController exists!';
    } else {
        return 'LoginController does not exist!';
    }
});
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('views.dashboard');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',UserController::class);

Route::resource('dashboard', DashboardController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('class_room', ClassRoomController::class);
Route::resource('peraturan', PeraturanController::class);
Route::resource('point', PointController::class);
Route::resource('pelanggar', PelanggarController::class);
Route::resource('kami', KamiController::class);
