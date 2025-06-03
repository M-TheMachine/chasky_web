<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NearshoringInquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->markdown('emails.nearshoring-inquiry')
                    ->subject('Nueva solicitud de servicio de Nearshoring')
                    ->with(['data' => $this->data]);
    }
}
