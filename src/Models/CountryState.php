<?php

namespace Yormy\GeoLaravel\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Yormy\GeoLaravel\Models\CountryState
 *
 * @property int $id
 * @property string $name_english
 * @property string $name_local
 * @property string $iso3
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yormy\GeoLaravel\Models\CountryCity[] $cities
 * @property-read int|null $cities_count
 * @method static \Illuminate\Database\Eloquent\Builder|CountryState newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryState newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryState query()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryState whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryState whereIso3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryState whereNameEnglish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryState whereNameLocal($value)
 * @mixin \Eloquent
 * @property-read CountryName|null $country
 */
class CountryState extends Model
{
    public function country()
    {
        return $this->hasOne(CountryName::class);
    }

    public function cities()
    {
        return $this->hasMany(CountryCity::class);
    }
}
