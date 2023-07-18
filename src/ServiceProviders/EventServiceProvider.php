<?php

namespace Yormy\GeoLaravel\ServiceProviders;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Yormy\GeoLaravel\Observers\GeoSubscriber;

class EventServiceProvider extends ServiceProvider
{
    protected $subscribe = [
        GeoSubscriber::class,
    ];
}
