<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarritoController;
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

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.vistaProducto');

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

Route::post('/me-gusta/destroy/{producto_id}', [MeGustasController::class, 'destroy'])->name('me-gusta.destroy');

Route::post('/me-gusta/toggle/{producto_id}', [MeGustasController::class, 'toggle'])->name('me-gusta.toggle');
Route::get('/meGustas', [MeGustasController::class, 'index'])->name('meGustas');

Route::post('/carrito/agregar/{productoId}', [CarritoController::class, 'store'])->name('carrito.agregar');
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::delete('/carrito/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::patch('/carrito/disminuir', [CarritoController::class, 'disminuir'])->name('carrito.disminuir');
