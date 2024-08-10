<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Ruta de Inicio
Route::get('/', function () {
    return view('auth.login');
});

//Rutas del Login
Route::view('/login', 'auth.login')->name('login');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

//Ruta de Cerrar Sesion
Route::post('logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

//Proteccion Middleware
Route::middleware('auth')->group(function () {
    //Ruta de Dashboard
    Route::view('/home', 'panel.dashboard')->name('home');

    //Ruta de Usuarios
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/users-save', [UserController::class, 'store'])->name('users-save');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users-update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users-delete');

    //Ruta de Roles
    Route::view('/rols', 'panel.roles')->name('rols');
});
