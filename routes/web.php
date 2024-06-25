<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PelanggarController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassRoomController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Dashboard::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',UserController::class);

Route::get('/siswa', [SiswaController::class,'index']);
Route::get('/petugas', [PetugasController::class,'index']);
Route::get('/class_room', [ClassRoomController::class,'index']);
Route::get('/peraturan', [PeraturanController::class,'index']);
Route::get('/point', [PointController::class,'index']);
Route::get('/pelanggar', [PelanggarController::class,'index']);
