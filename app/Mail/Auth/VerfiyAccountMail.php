<?php

namespace App\Mail\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerfiyAccountMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp , $verifyUrl , $expireTime;
    /**
     * Create a new message instance.
     */
    public function __construct(int $otp , string $email , $expireTime)
    {
        $this->otp = $otp;
        $this->expireTime = $expireTime;
        $this->verifyUrl = route('verify.email.index', $email);

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verfiy Account Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.auth.verfiy-account',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
