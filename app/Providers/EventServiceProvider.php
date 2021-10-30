<?php

namespace App\Providers;

//use App\Events\UserEvent;
//use App\Listeners\UpdateUserEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        //@shouldDiscoverEvents = true => can remove UserEvent it
//        UserEvent::class => [
//            UpdateUserEvent::class
//        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

//    public function shouldDiscoverEvents()
//    {
//        return true;
//    }
}
