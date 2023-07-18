<?php

namespace Yormy\GeoLaravel;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Yormy\GeoLaravel\ServiceProviders\EventServiceProvider;
use Yormy\GeoLaravel\ServiceProviders\RouteServiceProvider;

class GeoServiceProvider extends ServiceProvider
{
    const CONFIG_IDE_HELPER_FILE = __DIR__.'/../config/ide-helper.php';

    /**
     * @psalm-suppress MissingReturnType
     */
    public function boot(Router $router)
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->morphMaps();
    }

    /**
     * @psalm-suppress MixedArgument
     */
    public function register()
    {
        $this->mergeConfigFrom(static::CONFIG_IDE_HELPER_FILE, 'ide-helper');
    }


    private function morphMaps(): void
    {
        //        $logModelpath = config('chaski.models.log');
        //        $sections = explode('\\', $logModelpath);
        //        $LogModelName = end($sections);
        //
        //        $blockModelpath = config('chaski.models.block');
        //        $sections = explode('\\', $blockModelpath);
        //        $blockModelName = end($sections);
        //
        //        Relation::enforceMorphMap([
        //            $LogModelName => $logModelpath,
        //            $blockModelName => $blockModelpath,
        //        ]);
    }
}
