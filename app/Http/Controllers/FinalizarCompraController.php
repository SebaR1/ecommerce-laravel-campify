<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\AgradecimientoCompraMail;

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


    public function compraFinalizada(Request $request)
    {
        $carrito = session()->get('carrito', []);
        
        $productosEnCarrito = collect($carrito)->map(function ($item) {
            $producto = ProductoModel::find($item['id']);

            return [
                'nombre' => $producto->nombre_producto,
                'cantidad' => $item['cantidad'],
                'precio' => $producto->precio_producto * $item['cantidad'], 
            ];
        });

        $totalGeneral = $productosEnCarrito->sum('precio');

        $request->validate([
            'telefono_factura' => ['required', 'numeric', 'digits:10'],
            'nombre_factura' => ['required', 'max:20'],
            'apellido_factura' => ['required', 'max:20'],
            'email_factura' => ['required', 'email', 'max:255'],
            'direccion_factura' => ['required', 'max:255'],
        ], [
            'telefono_factura.required' => 'El teléfono es obligatorio.',
            'telefono_factura.numeric' => 'El teléfono solo puede contener números.',
            'telefono_factura.digits' => 'El teléfono debe tener exactamente 10 dígitos.',
            'nombre_factura.required' => 'El nombre es obligatorio.',
            'nombre_factura.max' => 'El nombre no puede tener más de 20 caracteres.',
            'apellido_factura.required' => 'El apellido es obligatorio.',
            'apellido_factura.max' => 'El apellido no puede tener más de 20 caracteres.',
            'email_factura.required' => 'El correo electrónico es obligatorio.',
            'email_factura.email' => 'El correo electrónico debe tener un formato válido.',
            'email_factura.max' => 'El correo electrónico no puede tener más de 255 caracteres.',
            'direccion_factura.required' => 'La dirección es obligatoria.',
            'direccion_factura.max' => 'La dirección no puede tener más de 255 caracteres.',
        ]);

        Mail::to($request->input('email_factura'))->send(new AgradecimientoCompraMail(
            $request->input('nombre_factura'),
            $request->input('apellido_factura'),
            $request->input('telefono_factura'),
            $request->input('email_factura'),
            $productosEnCarrito->toArray(),
            $totalGeneral,
        ));

        return redirect()->route('catalogo');
    }
}



