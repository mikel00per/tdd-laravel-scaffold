<?php

namespace Core\Listeners;

use Core\Events\BaseEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BaseListener
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
     * @param BaseEvent $event
     * @return void
     */
    public function handle(BaseEvent $event)
    {
        // Ejem.: fun(objs notificables, obj notificación)
        // Notification::send($event->task->users, new AutoTaskReminder($event->task));
    }
}
