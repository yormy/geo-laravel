<?php

declare(strict_types=1);

namespace Yormy\GeoLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{

    public $primaryKey = 'name';

    public $timestamps = false;

    public $casts = [
        'name' => 'string',
    ];
    protected $table = 'geo_timezones';
}
