<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/sobreNosotros', function() {
    return view('sobreNosotros');
})->name('sobreNosotros');

Route::get('/trabajaConNosotros', function() {
    return view('trabajaConNosotros');
})->name('trabajaConNosotros');

Route::get('/inicioSesion', function() {
    return view('inicioSesion');
})->name('inicioSesion');

Route::get('/crearCuenta', function() {
    return view('crearCuenta');
})->name('crearCuenta');

Route::get('/vistaProducto', function() {
    return view('vistaProducto');
})->name('vistaProducto');

Route::post('/registro', [LoginController::class, 'registro'])->name('registro'); 
Route::post('/login', [LoginController::class, 'login'])->name('login'); 

Route::get('/catalogo', function() {
    return view('catalogo');
})->name('catalogo');

