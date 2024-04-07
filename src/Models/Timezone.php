<?php

namespace Yormy\GeoLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    protected $table = 'geo_timezones';

    public $primaryKey = 'name';

    public $timestamps = false;

    public $casts = [
        'name' => 'string',
    ];
}
