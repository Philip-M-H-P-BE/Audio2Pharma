<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyToSubmittedContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $boodschap;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $boodschap)
    {
        $this->name = $name;
        $this->boodschap = $boodschap;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ALLEMAAL KLOTE!!!')
                    ->view('emails.reply');
    }
}
