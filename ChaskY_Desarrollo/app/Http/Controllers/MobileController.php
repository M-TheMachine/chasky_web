<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MobileAppInquiry;
use Illuminate\Support\Facades\Mail;

class MobileController extends Controller
{
    public function show()
    {
        return view('services.mobile');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'platform' => 'required|string|max:255',
            'app_type' => 'required|string|max:255',
            'description' => 'required|string',
            'budget' => 'required|string|max:255',
            'timeline' => 'required|string|max:255',
        ]);

        Mail::to(config('mail.marketing_notification_email', 'dreambig@chaskydev.com'))
            ->send(new MobileAppInquiry($validated));

        return redirect()
            ->route('mobile.success')
            ->with('success', 'Tu solicitud ha sido enviada con éxito. Nos pondremos en contacto contigo pronto.');
    }

    public function success()
    {
        return view('services.mobile.success');
    }
}
