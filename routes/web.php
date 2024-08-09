<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panel/dashboard');
});

//Ruta de Dashboard
Route::view('/home', 'panel.dashboard')->name('home');
Route::view('/login', 'auth.login')->name('login');

//Ruta de Usuarios
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/users-save', [UserController::class, 'store'])->name('users-save');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users-update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users-delete');

//Ruta de Roles
Route::view('/rols', 'panel.roles')->name('rols');
