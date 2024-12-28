<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoModel;
use Illuminate\Support\Facades\Log;

class CarritoController extends Controller
{
    public function store(Request $request)
    {
        $productoId = $request->json('producto_id');  // Asegúrate de usar 'input' para datos JSON
        $cantidad = 1;
        
        // Obtener el carrito actual de la sesión
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$productoId])) {
            // Si el producto ya está en el carrito, incrementa la cantidad
            $carrito[$productoId]['cantidad'] += $cantidad;
        } else {
            // Obtener el producto de la base de datos
            $producto = ProductoModel::find($productoId);

            if (!$producto) {
                return response()->json(['error' => 'Producto no encontrado'], 404);
            }

            // Agregar el producto al carrito
            $carrito[$productoId] = [
                'id' => $producto->id_producto,
                'nombre' => $producto->nombre_producto,
                'precio' => $producto->precio_producto,
                'cantidad' => $cantidad,
                'imagen' => $producto->imagen_producto,
            ];
        }

        // Guardar el carrito en la sesión
        session()->put('carrito', $carrito);

        return response()->json(['mensaje' => 'Producto agregado al carrito', 'carrito' => $carrito]);
    }

    public function index()
    {
        // Obtén el carrito desde la sesión
        $carrito = session()->get('carrito', []);
    
        // Formatea los productos en un arreglo
        $productosEnCarrito = collect($carrito)->map(function ($item) {
            // Encuentra el producto en la base de datos para obtener información actualizada
            $producto = ProductoModel::find($item['id']);
    
            return [
                'producto' => $producto,
                'cantidad' => $item['cantidad'],
            ];
        });
    
        return view('carrito', compact('productosEnCarrito'));
    }
    

    public function eliminar(Request $request)
    {
        $productoId = $request->json('producto_id');  // Asegúrate de usar 'input' para datos JSON
    
        $carrito = session()->get('carrito', []);
    
        if (isset($carrito[$productoId])) {
            unset($carrito[$productoId]);
            session()->put('carrito', $carrito);
        } else {
            return response()->json(['error' => 'Producto no encontrado en el carrito.'], 404);
        }
    
        return response()->json([
            'mensaje' => 'Producto eliminado del carrito.',
            'producto_id' => $productoId,
            'carrito' => $carrito,
        ]);
    }
    
    public function disminuir(Request $request)
    {
        $productoId = $request->json('producto_id');
        $carrito = session()->get('carrito', []);
    
        if (!isset($carrito[$productoId])) {
            return response()->json(['error' => 'Producto no encontrado en el carrito.'], 404);
        }
    
        // Disminuir la cantidad
        $carrito[$productoId]['cantidad']--;
    
        if ($carrito[$productoId]['cantidad'] <= 0) {
            unset($carrito[$productoId]); // Eliminar el producto si la cantidad es 0
        }
    
        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);
    
        return response()->json([
            'mensaje' => 'Cantidad actualizada.',
            'producto_id' => $productoId,
            'cantidad' => $carrito[$productoId]['cantidad'] ?? 0, // Si fue eliminado, cantidad será 0
        ]);
    }
    
}
