<?php

namespace App\Mail;

use App\Models\Quotation;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CurrencyEmailMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public readonly Quotation $quotation)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Currency Email',
        );
    }

    public function content(): Content
    {
        return new Content(
            html: 'emails.currency-email',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
