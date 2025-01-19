<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categorias = $request->input('categorias', []); // Obtiene las categorías seleccionadas
    
        if (!empty($categorias)) {
            // Filtra los productos por las categorías seleccionadas y aplica paginación
            $productos = ProductoModel::whereHas('categoria', function ($query) use ($categorias) {
                $query->whereIn('nombre_categoria', $categorias);
            })->paginate(2);
        } else {
            // Si no hay filtros, devuelve todos los productos con paginación
            $productos = ProductoModel::paginate(2);
        }
    
        return view('catalogo', compact('productos'));  // ["productos"=>$productos] es lo mismo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.agregarproducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nombre_producto" => ['required'],
            "precio_producto" => ['required'],
            "stock_producto" => ['required'],
            "descripcion_producto" => ['required'],
            'categoria_id' => ['required', 'integer', 'not_in:""'],
            "imagen_producto" => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Validación para la imagen
        ], [
            "nombre_producto.required" => "Falta completar este campo!",
            "precio_producto.required" => "Falta completar este campo!",
            "stock_producto.required" => "Falta completar este campo!",
            "descripcion_producto.required" => "Falta completar este campo!",
            "categoria_id.required" => "Falta completar este campo!",
            "categoria_id.not_in" => "Falta completar este campo!",
            "imagen_producto.required" => "Falta subir una imagen!",
            "imagen_producto.image" => "El archivo debe ser una imagen!",
            "imagen_producto.mimes" => "La imagen debe estar en formato jpeg, png, jpg o gif!",
            "imagen_producto.max" => "La imagen no puede superar los 2 MB!",
        ]);
    
        $imagen = $request->file('imagen_producto');
        $base64Imagen = base64_encode(file_get_contents($imagen));
    
        $data['imagen_producto'] = $base64Imagen;
    
        ProductoModel::create($data);
    
        return response()->redirectTo("catalogo")->with('success', 'Producto creado exitosamente!');
    }
    

    public function search(Request $request)
    {
        $busqueda = $request->input("busqueda");

        $productos = ProductoModel::where('nombre_producto', 'LIKE', '%' . $busqueda . '%')->get();

        return view('catalogo', ['productos' => $productos, 'busqueda' => $busqueda]);
    }

    public function show(string $id)
    {
        $producto = ProductoModel::with('comentarios.usuario')->findOrFail($id); // Carga también los usuarios de cada comentario

        return view('producto.vistaProducto', compact('producto'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = ProductoModel::findOrFail($id);
        return view('producto.editar', compact('producto'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "nombre_producto" => ['required'],
            "precio_producto" => ['required'],
            "stock_producto" => ['required'],
            "descripcion_producto" => ['required'],
            'categoria_id' => ['required', 'integer', 'not_in:""'],
            "imagen_producto" => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ], [
            "nombre_producto.required" => "Falta completar este campo!",
            "precio_producto.required" => "Falta completar este campo!",
            "stock_producto.required" => "Falta completar este campo!",
            "descripcion_producto.required" => "Falta completar este campo!",
            "categoria_id.required" => "Falta completar este campo!",
            "categoria_id.not_in" => "Falta completar este campo!",
            "imagen_producto.image" => "El archivo debe ser una imagen!",
            "imagen_producto.mimes" => "La imagen debe estar en formato jpeg, png, jpg o gif!",
            "imagen_producto.max" => "La imagen no puede superar los 2 MB!",
        ]);
    
        $producto = ProductoModel::findOrFail($id);
    
        $producto->nombre_producto = $data['nombre_producto'];
        $producto->precio_producto = $data['precio_producto'];
        $producto->stock_producto = $data['stock_producto'];
        $producto->descripcion_producto = $data['descripcion_producto'];
        $producto->categoria_id = $data['categoria_id'];
    
        //Hay que manejar la imagen si es que se cambio y convertirla al estandar de la base, es decir en base64
        if ($request->hasFile('imagen_producto')) {
            //$imagePath = $request->file('imagen_producto')->store('images', 'public'); // Si quisiera podria guardarlo en la carpeta public/images, y tendria sus ventajas y desventajas.
            $producto->imagen_producto = base64_encode(file_get_contents($request->file('imagen_producto')->getRealPath()));
        }
    
        $producto->save();
    
        return response()->redirectTo("catalogo")->with('success', 'Producto modificado exitosamente!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $producto_id = $request->json('producto_id'); 
    
        $producto = ProductoModel::find($producto_id);
    
        if ($producto) {
            $producto->delete();
    
            return response()->json([
                'mensaje' => 'Producto eliminado exitosamente!'
            ], 200);
        } else {
            // Respuesta de error si el producto no existe
            return response()->json([
                'error' => 'Producto no encontrado!'
            ], 404);
        }
    }
    
}
