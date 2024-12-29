<?php

namespace App\Http\Controllers;

use App\Models\MeGustaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MeGustasController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $productos = MeGustaModel::where('usuario_id', $userId)
                            ->with(['producto.categoria'])
                            ->get();

        
        return view('meGustas', ["productos"=>$productos]);
    }


    public function toggle($producto_id)
    {
        $userId = Auth::id();
        if (!$userId) {
            return redirect()->route('inicioSesion')->withErrors(['noSession' => 'Debes iniciar sesión para dar Me Gusta.']);
        }

        // Verificar si ya existe un registro en "Me Gustas"
        $meGusta = MeGustaModel::where('usuario_id', $userId)
                               ->where('producto_id', $producto_id)
                               ->first();

        if ($meGusta) {
            // Si existe, eliminarlo (desmarcar "Me Gusta")
            $meGusta->delete();
        } else {
            // Si no existe, crearlo (marcar "Me Gusta")
            MeGustaModel::create([
                'usuario_id' => $userId,
                'producto_id' => $producto_id,
            ]);
        }

        // Redirigir a la misma página
        return back();
    }

    public function destroy($producto_id)
    {
        $userId = Auth::id();

        $meGusta = MeGustaModel::where('usuario_id', $userId)
                                ->where('producto_id', $producto_id)
                                ->first();

        $meGusta->delete();

        return back();
    }
}
