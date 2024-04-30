<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use App\Events\UserCreatingEvent;
use Illuminate\Support\Facades\Event;
use App\Listeners\UserCreatingListener;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Event::listen(
            UserCreatingEvent::class,
            UserCreatingListener::class,
        );

    }
}
