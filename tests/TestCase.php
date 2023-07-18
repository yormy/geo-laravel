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

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpConfig();
    }

    protected function getPackageProviders($app)
    {
        return [
            GeoServiceProvider::class,
            RayServiceProvider::class,
        ];
    }

    protected function setUpConfig(): void
    {
        config(['app.key' => 'base64:yNmpwO5YE6xwBz0enheYLBDslnbslodDqK1u+oE5CEE=']);
    }

}
