<?php

namespace Yormy\GeoLaravel\Tests\Features;

use Yormy\GeoLaravel\Models\CountryCity;
use Yormy\GeoLaravel\Tests\TestCase;

class ExampleUnitTest extends TestCase
{
    /**
     * @test
     */
    public function CityExists(): void
    {
        $country = CountryCity::find(10);
        $this->assertEquals('Akividu', $country->name);
    }
}
