<?php

namespace Yormy\GeoLaravel\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Yormy\GeoLaravel\Models\CountryCity
 *
 * @property int $id
 * @property int $state_id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCity query()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCity whereStateId($value)
 * @mixin \Eloquent
 * @property-read CountryState|null $state
 */
class CountryCity extends Model
{
    protected $table = 'geo_country_cities';

    public function state()
    {
        return $this->hasOne(CountryState::class);
    }
}
