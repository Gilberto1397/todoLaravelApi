<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(UserController::class)->group(function () {
    Route::get('/usuario/cadastro', [UserController::class, 'create'])->name('user.create');
    Route::post('/usuario/cadastro', [UserController::class, 'store'])->name('user.store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login.create');
    Route::post('/', [LoginController::class, 'store'])->name('login.store');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('login.index');
});
