<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'halaman_auth/login');


Route::get('/page', [AuthController::class, 'index'])->name('dashboard');
//Route::get('/sesi', [AuthController::class, 'index'])->name('auth');