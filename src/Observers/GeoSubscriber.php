<?php

namespace Yormy\GeoLaravel\Observers;

use Illuminate\Events\Dispatcher;
use Yormy\GeoLaravel\Observers\Interfaces\LoggableEventInterface;
use Yormy\GeoLaravel\Observers\Listeners\LogEvent;

class GeoSubscriber
{
    public function subscribe(Dispatcher $events): void
    {
        //        $events->listen(
        //            LoggableEventInterface::class,
        //            LogEvent::class
        //        );
    }
}
