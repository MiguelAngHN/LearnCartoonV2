<?php

use App\Http\Controllers\OperacionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('logins', [LoginController::class, 'index'])->name('logins.index');
// Route::post('logins', [LoginController::class, 'store'])->name('logins.store');
// Route::get('logins/login', [LoginController::class, 'login']);
// Route::delete('login/{login}', [LoginController::class, 'destroy'])->name('logins.destroy');
// Route::get('logins/{login}', [LoginController::class, 'show'])->name('logins.show');


 
Route::get('logins', [LoginController::class, 'index'])->name('logins.index');
Route::post('logins', [LoginController::class, 'store'])->name('logins.store');
Route::get('logins/create', [LoginController::class, 'create']);
Route::delete('login/{login}', [LoginController::class, 'destroy'])->name('login.destroy');
Route::get('logins/{login}', [LoginController::class, 'show'])->name('login.show');
