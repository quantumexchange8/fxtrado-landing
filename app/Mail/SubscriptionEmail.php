<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email; // Store the email for the view

    /**
     * Create a new message instance.
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this->subject('FxTrado Subscription')
                    ->to('developer@currenttech.pro') // The email to which it will be sent
                    ->view('emails.subscription') // View for the email content
                    ->with(['email' => $this->email]); // Pass email to the view
    }
}
