<?php

namespace Yormy\GeoLaravel\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Yormy\GeoLaravel\Models\CountryName
 *
 * @property int $iso3
 * @property string $iso2
 * @property array $name
 * @property string $dial_prefix
 * @property string $timezone
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Yormy\GeoLaravel\Models\CountryState[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName query()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName whereDialPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName whereIso2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName whereIso3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryName whereTimezone($value)
 * @mixin \Eloquent
 * @property-read string|null $created_at_humans
 */
class CountryName extends Model
{
    use HasTranslations;

    protected $table = 'geo_country_names';

    protected $translatable = ['name'];

    public $primaryKey = 'iso3';
    public $incrementing = false;

    public $timestamps = false;

    public function states()
    {
        return $this->hasMany(CountryState::class);
    }
}
