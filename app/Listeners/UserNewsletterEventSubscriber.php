<?php
namespace App\Listeners;

class UserNewsletterEventSubscriber
{
    public function onUserSubscription($event)
    {
        // handles the UserSubscribedToNewsletter event
    }

    public function onUserCancellation($event) 
    {
        // handles the UserCancelledNewsletterSubscription event
    }
    
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\UserSubscribedToNewsletter::class,
            'App\Listeners\UserNewsletterEventSubscriber@onUserSubscription'
        );

        $events->listen(
            \App\Event\UserCancelledNewsletterSubscription::class,
            'App\Listeners\UserNewsletterEventSubscriber@onUserCancellation'           
        );
    }
}
?>