<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MeGustasController;
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

Route::get('/catalogo', function() {
    return view('catalogo');
})->name('catalogo');

Route::get("/meGustas", function(){
    return view('meGustas');
});

/*Route::get('/vistaProducto', function() {
    return view('vistaProducto');
})->name('vistaProducto');*/

Route::post('/registro', [LoginController::class, 'registro'])->name('registro'); 
Route::post('/login', [LoginController::class, 'login'])->name('login'); 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/catalogo', [ProductoController::class,'store'])->name('catalogo');

Route::get('/catalogo', [ProductoController::class,'index'])->name('catalogo');

Route::get('/agregarproducto',[ProductoController::class, 'create'])->name('agregarproducto');

Route::post('/me-gusta/toggle/{producto_id}', [MeGustasController::class, 'toggle'])->name('me-gusta.toggle');

Route::post('/me-gusta/toggle/{producto_id}', [MeGustasController::class, 'toggle'])->name('me-gusta.toggle');
Route::get('/meGustas', [MeGustasController::class, 'index'])->name('meGustas');




