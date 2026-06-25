<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApiErrorMailable extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $errorMessage
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '⚠️ Erreur Critique - API Google Places',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.api_error',
        );
    }
}
