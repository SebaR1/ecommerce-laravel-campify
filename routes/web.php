<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;

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

/*Route::get('/vistaProducto', function() {
    return view('vistaProducto');
})->name('vistaProducto');*/

Route::post('/registro', [LoginController::class, 'registro'])->name('registro'); 
Route::post('/login', [LoginController::class, 'login'])->name('login'); 


Route::post('/catalogo', [ProductoController::class,'index'])->name('catalogo');



Route::get('/agregarproducto',[ProductoController::class, 'create'])->name('/agregarproducto');


Route::post('/producto',[ProductoController::class, 'store']);








