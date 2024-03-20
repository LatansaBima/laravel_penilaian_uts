<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login');
// Belajar Controller
Route::get('/belajar', [BelajarController::class, 'index']);
Route::get('/biodata', [BelajarController::class, 'biodata']);
// Request data url
Route::get('belajar/{nama}', [BelajarController::class, 'getNama']);
// Request data dari inputan form
Route::get('/form', [BelajarController::class, 'formRequest']);
Route::post('form/proses', [BelajarController::class, 'proses']);

Route::get('/home', [BelajarController::class, 'home']);

// Register-Login-Dashboard
Route::view('guest', 'auth.guest');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Tambah data pegawai
Route::get('datapegawai', [PegawaiController::class, 'datapegawai'])->name('datapegawai');
Route::post('datapegawai/action', [PegawaiController::class, 'actiondatapegawai'])->name('actiondatapegawai');
