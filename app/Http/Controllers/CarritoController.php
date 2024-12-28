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
/*

    public function store(Request $request)
{
    try {
        // Validar el ID del producto
        $productoId = $request->input('producto_id');
        if (!$productoId) {
            return response()->json(['error' => 'El ID del producto es requerido'], 400);
        }

        // Buscar el producto
        $producto = ProductoModel::find($productoId);
        if (!$producto) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        // Lógica para agregar al carrito
        $carrito = session()->get('carrito', []);
        $carrito[$productoId] = [
            'id' => $producto->id_producto,
            'nombre' => $producto->nombre_producto,
            'precio' => $producto->precio_producto,
            'cantidad' => 1,
        ];
        session()->put('carrito', $carrito);

        return response()->json(['mensaje' => 'Producto agregado al carrito']);
    } catch (\Exception $e) {
        Log::error("Error en el método store: " . $e->getMessage());
        return response()->json(['error' => 'Error interno del servidor'], 500);
    }
}

    */
/*
    public function mostrarCarrito()
    {
        // Obtén el carrito de la sesión (estructura: [productoId => cantidad])
        $carrito = session()->get('carrito', []);

        // Obtén los productos desde la base de datos según los IDs en el carrito
        $productos = ProductoModel::whereIn('id_producto', array_keys($carrito))->get();

        // Combina los productos con sus cantidades
        $productosEnCarrito = $productos->map(function ($producto) use ($carrito) {
            return [
                'producto' => $producto,
                'cantidad' => $carrito[$producto->id_producto],
            ];
        });

        // Pasa la variable a la vista
        return view('carrito', ['productosEnCarrito' => $productosEnCarrito]);
    }

    public function agregarAlCarrito(Request $request, $productoId)
    {
        // Obtén el carrito de la sesión, o inicialízalo como un array vacío
        $carrito = session()->get('carrito', []);

        // Incrementa la cantidad del producto si ya existe, o agrégalo con cantidad 1
        if (isset($carrito[$productoId])) {
            $carrito[$productoId]++;
        } else {
            $carrito[$productoId] = 1;
        }

        // Actualiza el carrito en la sesión
        session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function index()
    {
        $carrito = session()->get('carrito', []);
        return view('carrito', compact('carrito'));
    }

    public function eliminar(Request $request)
    {
        $productoId = $request->input('producto_id');
    
        $carrito = session()->get('carrito', []);
    
        if (isset($carrito[$productoId])) {
            unset($carrito[$productoId]);
            session()->put('carrito', $carrito);
        }
    
        return response()->json([
            'mensaje' => 'Producto eliminado del carrito.',
            'producto_id' => $productoId,
            'carrito' => $carrito,
        ]);
    }
*/
}
