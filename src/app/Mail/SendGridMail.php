<?php

namespace App\Mail;

use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendGridMail extends Mailable
{
    use Queueable, SerializesModels;

    private Email $email;
    private string $destinatario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Email $email, string $destinatario)
    {
        $this->email = $email;
        $this->destinatario = $destinatario;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: $this->email->emailRemetente,
            subject: $this->email->titulo,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            htmlString: $this->email->conteudo
        );
    }
}
