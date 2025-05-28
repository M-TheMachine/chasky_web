<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InternshipApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->markdown('emails.internship-application')
                    ->subject('Nueva postulación para prácticas: ' . $this->data['position'])
                    ->attach($this->data['cv_full_path']);
    }
}
