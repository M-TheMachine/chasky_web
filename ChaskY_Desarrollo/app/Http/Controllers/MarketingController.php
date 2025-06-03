<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MarketingInquiry;
use Illuminate\Support\Facades\Mail;

class MarketingController extends Controller
{
    public function show()
    {
        return view('marketing');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'company_size' => 'required|string|max:255',
            'objectives' => 'required|string',
            'target_audience' => 'required|string',
            'current_strategies' => 'required|string',
            'current_results' => 'required|string',
            'channels' => 'array',
            'specific_project' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'start_date' => 'required|string|max:255',
        ]);

        Mail::to(config('mail.marketing_notification_email', 'dreambig@chaskydev.com'))
            ->send(new MarketingInquiry($validated));

        return redirect()
            ->route('marketing.success')
            ->with('success', 'Tu solicitud ha sido enviada con éxito. Nos pondremos en contacto contigo pronto.');
    }

    public function success()
    {
        return view('marketing.success');
    }
}
