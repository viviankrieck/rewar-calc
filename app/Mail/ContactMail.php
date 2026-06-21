<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // Declaramos a propriedade pública para que a View tenha acesso aos dados
    public array $formData;

    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Novo Contato do Site: ' . $this->formData['name'],
            replyTo: $this->formData['email'], // Permite responder diretamente ao cliente
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact', // Crie uma view markdown para o email
        );
    }
}
