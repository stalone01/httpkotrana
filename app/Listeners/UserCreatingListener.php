<?php

namespace App\Listeners;

use App\Events\UserCreatingEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatingListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreatingEvent $event): void
    {
        dd("Creation en cours de user ". $event->user->name);
    }
}
