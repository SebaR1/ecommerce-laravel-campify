<?php

namespace App\Http\Controllers;

use App\Mail\FormularioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormularioController extends Controller
{
    public function enviarFormulario(Request $request)
    {
        try {
            // Validar los datos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'telefono' => 'required|string|max:15',
                'localidad' => 'required|string|max:255',
                'codigo_postal' => 'required|string|max:10',
                'email' => 'required|email',
                'fecha_nacimiento' => 'required|date',
                'puesto_interes' => 'required|string',
                'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            ]);
    
            // Obtener los datos y enviar el correo
            $datos = $request->all();
            Mail::to('byboxer09@gmail.com')->send(new FormularioMailable($datos));
    
            // Mensaje de éxito
            session()->flash('success', 'Formulario enviado correctamente.');
        } catch (\Exception $e) {
            // Mensaje de error
            session()->flash('error', 'Ocurrió un error al enviar el formulario. Inténtalo nuevamente.');
        }
    
        // Redirigir al formulario
        return redirect()->back();
    }
    
}