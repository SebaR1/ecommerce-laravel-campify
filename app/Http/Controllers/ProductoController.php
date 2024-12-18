<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $productos = ProductoModel::all();

        
        return view('catalogo', ["productos"=>$productos]);
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
        //FALTA IMAGEN HACERLA OBLIGATORIA PERO LA SAQUE HASTA QUE HAGA LO DEL 64


       ], [
        "nombre_producto.required" => "Falta completar este campo!",
        "precio_producto.required" => "Falta completar este campo!",

        "stock_producto.required" => "Falta completar este campo!",

        "descripcion_producto.required" => "Falta completar este campo!",
        "categoria_producto.required" => "Falta completar este campo!",
        "categoria_producto.not_in" => "Falta completar este campo!",

    
       ]);
       
       //echo var_dump($data);
       
       //ProductoModel::create($data);

       return response()->redirectTo("/producto");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
