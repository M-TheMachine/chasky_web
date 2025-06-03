<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OffshoringInquiry;
use Illuminate\Support\Facades\Mail;

class OffshoringController extends Controller
{
    public function show()
    {
        return view('services.offshoring');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'required|string|max:255',
            'team_size' => 'required|string|max:255',
            'skills_needed' => 'required|string',
            'project_duration' => 'required|string|max:255',
            'start_date' => 'required|string|max:255',
        ]);

        Mail::to(config('mail.marketing_notification_email', 'dreambig@chaskydev.com'))
            ->send(new OffshoringInquiry($validated));

        return redirect()
            ->route('offshoring.success')
            ->with('success', 'Tu solicitud ha sido enviada con éxito. Nos pondremos en contacto contigo pronto.');
    }

    public function success()
    {
        return view('services.offshoring.success');
    }
}
