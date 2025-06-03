<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WebDevInquiry;
use Illuminate\Support\Facades\Mail;

class WebDevController extends Controller
{
    public function show()
    {
        return view('services.webdev');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'required|string|max:255',
            'description' => 'required|string',
            'budget' => 'required|string|max:255',
            'timeline' => 'required|string|max:255',
        ]);

        Mail::to(config('mail.marketing_notification_email', 'dreambig@chaskydev.com'))
            ->send(new WebDevInquiry($validated));

        return redirect()
            ->route('webdev.success')
            ->with('success', 'Tu solicitud ha sido enviada con éxito. Nos pondremos en contacto contigo pronto.');
    }

    public function success()
    {
        return view('services.webdev.success');
    }
}
