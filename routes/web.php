<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panel/dashboard');
});

//Ruta de Dashboard
Route::view('/home', 'panel.dashboard')->name('home');

//Ruta de Usuarios
Route::view('/users', 'panel.usuarios')->name('users');

//Ruta de Roles
Route::view('/rols', 'panel.roles')->name('rols');
