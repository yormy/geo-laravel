<?php

namespace Yormy\GeoLaravel\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Spatie\LaravelRay\RayServiceProvider;
use Yormy\GeoLaravel\GeoServiceProvider;

abstract class TestCase extends BaseTestCase
{
    // disable after migration to inspect db during test
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [
            GeoServiceProvider::class,
        ];
    }
}
