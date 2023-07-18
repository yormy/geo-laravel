<?php

namespace Yormy\GeoLaravel;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Yormy\GeoLaravel\ServiceProviders\EventServiceProvider;
use Yormy\GeoLaravel\ServiceProviders\RouteServiceProvider;

class GeoServiceProvider extends ServiceProvider
{
    const CONFIG_FILE = __DIR__.'/../config/geo.php';

    const CONFIG_IDE_HELPER_FILE = __DIR__.'/../config/ide-helper.php';

    /**
     * @psalm-suppress MissingReturnType
     */
    public function boot(Router $router)
    {
        $this->publish();

        $this->registerCommands();

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->registerMiddleware($router);

        $this->registerListeners();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'geo-laravel');

        $this->registerTranslations();

        $this->morphMaps();
    }

    /**
     * @psalm-suppress MixedArgument
     */
    public function register()
    {
        $this->mergeConfigFrom(static::CONFIG_FILE, 'confirmables');
        $this->mergeConfigFrom(static::CONFIG_IDE_HELPER_FILE, 'ide-helper');

        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }

    private function publish(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                self::CONFIG_FILE => config_path('geo.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations'),
            ], 'migrations');

            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/geo'),
            ], 'translations');
        }
    }

    private function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
            ]);
        }
    }

    public function registerMiddleware(Router $router): void
    {
    }

    public function registerListeners(): void
    {
        //        $this->app['events']->listen(TripwireBlockedEvent::class, NotifyAdmin::class);
    }

    public function registerTranslations(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'geo');
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
