<?php

namespace App\Http\Controllers;

use App\Mail\InternshipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class InternshipController extends Controller
{
    public function software()
    {
        return view('pasantias.software');
    }

    public function marketing()
    {
        return view('pasantias.marketing');
    }

    public function submitSoftware(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'universidad' => 'required|string|max:255',
            'carrera' => 'required|string|max:255',
            'semestre' => 'required|string|max:50',
            'mensaje' => 'required|string',
            'cv' => 'required|file|mimes:pdf|max:5120',
        ]);

        // Guardar el CV
        $cvPath = $request->file('cv')->store('cv_postulaciones');
        
        // Enviar email
        Mail::to(config('mail.from.address'))->send(new InternshipApplication([
            'area' => 'Desarrollo de Software',
            'datos' => $validated,
            'cv_path' => $cvPath
        ]));

        return redirect()->route('pasantias.software')->with('success', 'Tu postulación ha sido enviada exitosamente.');
    }

    public function submitMarketing(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'universidad' => 'required|string|max:255',
            'carrera' => 'required|string|max:255',
            'semestre' => 'required|string|max:50',
            'experiencia' => 'required|string',
            'mensaje' => 'required|string',
            'portafolio' => 'nullable|string|url',
            'cv' => 'required|file|mimes:pdf|max:5120',
        ]);

        // Guardar el CV
        $cvPath = $request->file('cv')->store('cv_postulaciones');
        
        // Enviar email
        Mail::to(config('mail.from.address'))->send(new InternshipApplication([
            'area' => 'Marketing Digital',
            'datos' => $validated,
            'cv_path' => $cvPath
        ]));

        return redirect()->route('pasantias.marketing')->with('success', 'Tu postulación ha sido enviada exitosamente.');
    }

    public function applyMarketing(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'university' => 'required|string|max:255',
            'why_apply' => 'required|string',
            'portfolio' => 'nullable|url',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120'
        ]);

        // Guardar el CV en el disco público
        $cvPath = $request->file('cv')->store('/', 'internships');

        // Enviar email de notificación con la ruta pública del CV
        Mail::to(config('internships.notification_email'))->send(new InternshipApplication([
            'position' => 'Marketing Digital',
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'university' => $validated['university'],
            'why_apply' => $validated['why_apply'],
            'portfolio' => $validated['portfolio'] ?? null,
            'cv_path' => $cvPath,
            'cv_full_path' => storage_path('app/public/internship-applications/' . $cvPath)
        ]));

        return view('internships.success');
    }

    public function applyAudiovisual(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'university' => 'required|string|max:255',
            'why_apply' => 'required|string',
            'portfolio' => 'nullable|url',
            'demo_reel' => 'nullable|url',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120'
        ]);

        // Guardar el CV en el disco público
        $cvPath = $request->file('cv')->store('/', 'internships');

        // Enviar email de notificación con la ruta pública del CV
        Mail::to(config('internships.notification_email'))->send(new InternshipApplication([
            'position' => 'Producción Audiovisual',
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'university' => $validated['university'],
            'why_apply' => $validated['why_apply'],
            'portfolio' => $validated['portfolio'] ?? null,
            'demo_reel' => $validated['demo_reel'] ?? null,
            'cv_path' => $cvPath,
            'cv_full_path' => storage_path('app/public/internship-applications/' . $cvPath)
        ]));

        return view('internships.success');
    }
}
