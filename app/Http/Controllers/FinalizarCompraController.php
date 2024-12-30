<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoModel;

class FinalizarCompraController extends Controller
{
   public function finalizarCompra(){

    $carrito = session()->get('carrito', []);
    
    $productosEnCarrito = collect($carrito)->map(function ($item) {
        $producto = ProductoModel::find($item['id']);

        return [
            'producto' => $producto,
            'cantidad' => $item['cantidad'],
        ];
    });

    return view('producto.finalizacioncompra', compact('productosEnCarrito'));

   
   }
}
