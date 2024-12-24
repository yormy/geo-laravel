<?php

declare(strict_types=1);

namespace Yormy\GeoLaravel\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Yormy\GeoLaravel\Models\CountryName;
use Yormy\GeoLaravel\Models\Timezone;

class TimezoneRepository
{
    public function __construct(private ?Timezone $model = null)
    {
        if (! $model) {
            $this->model = new Timezone();
        }
    }

    public function all(): Collection
    {
        return $this->model->orderBy('name')
            ->get();
    }

    public function findByIso2(string $iso2): ?CountryName
    {
        return $this->model
            ->where('country_code', $iso2)
            ->first();
    }
}
