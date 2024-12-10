<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/sobreNosotros', function() {
    return view('sobreNosotros');
})->name('sobreNosotros');

Route::get('/contacto', function() {
    return view('contacto');
})->name('contacto');