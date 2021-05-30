<?php

namespace App\Listeners;

use App\Events\UserRequestedInformation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class InformAdminAndAudiologistsAboutInformationRequest
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRequestedInformation  $event
     * @return void
     */
    public function handle(UserRequestedInformation $event)
    {
        //
    }
}
