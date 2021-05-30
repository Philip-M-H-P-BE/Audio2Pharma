<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailToContactFormSubmitter extends Mailable
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
        return $this->subject('verzending van het contactformulier op...')
                    ->view('emails.reply');
    }
}
