<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Mail\FormularioMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class FormularioController extends Controller
{
    public function enviarFormulario(Request $request): RedirectResponse
    {

        $nombre = $request->input('nombre');
        Mail::to("romerosebastian781@gmail.com")->send(new OrderShipped($nombre));

    
        // Redirigir al formulario
        return response()->redirectTo('/');
    }
    
}