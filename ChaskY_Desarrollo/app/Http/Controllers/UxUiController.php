<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UxUiInquiry;
use Illuminate\Support\Facades\Mail;

class UxUiController extends Controller
{
    public function show()
    {
        return view('services.uxui');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'project_type' => 'required|string|max:255',
            'description' => 'required|string',
            'timeline' => 'required|string|max:255',
        ]);

        Mail::to(config('mail.marketing_notification_email', 'dreambig@chaskydev.com'))
            ->send(new UxUiInquiry($validated));

        return redirect()
            ->route('uxui.success')
            ->with('success', 'Tu solicitud ha sido enviada con éxito. Nos pondremos en contacto contigo pronto.');
    }

    public function success()
    {
        return view('services.uxui.success');
    }
}
