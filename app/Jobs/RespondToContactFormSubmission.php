<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailToContactFormSubmitter;

class RespondToContactFormSubmission implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    // the properties
    protected $email;
    protected $name;
    protected $boodschap;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $name, $boodschap)
    {
        $this->email = $email;
        $this->name = $name;
        $this->boodschap = $boodschap;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
	 
    public function handle()
    {
       Mail::to($this->email)
            ->send(new MailToContactFormSubmitter($this->name, $this->boodschap));       
    }
}