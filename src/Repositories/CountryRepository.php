<?php declare(strict_types=1);

namespace Yormy\GeoLaravel\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Mexion\BedrockUsersv2\Domain\User\Models\Member;
use Yormy\GeoLaravel\Models\CountryName;

class CountryRepository
{
    public function __construct(private ?CountryName $model = null)
    {
        if (!$model) {
            $this->model = new CountryName();
        }
    }

    public function all(): Collection
    {
        return $this->model->orderBy('iso2')
            ->get();
    }

    public function findByIso2(string $iso2): ?CountryName
    {
        return $this->model
            ->where('iso2', $iso2)
            ->first();
    }
}
