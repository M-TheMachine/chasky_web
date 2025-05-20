<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactoEmail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'servicio' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        try {
            // Preparar los datos del correo
            $datos = $request->all();
            
            // Usar el servicio como asunto si no existe un campo de asunto explícito
            if (!isset($datos['asunto'])) {
                $datos['asunto'] = $datos['servicio'];
            }
            
            // Enviar correo electrónico
            Mail::to('dreambig@chaskydev.com')->send(new ContactoEmail($datos));

            Log::info('Formulario de contacto recibido:', $request->all());

            return redirect()->back()->with('success', 'Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.');
        } catch (\Exception $e) {
            Log::error('Error al procesar el formulario de contacto:', ['error' => $e->getMessage()]);
            return redirect()->back()
                ->withInput()
                ->with('error', 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.');
        }
    }
}
