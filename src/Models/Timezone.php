<?php

namespace Yormy\GeoLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    public $primaryKey = 'name';

    public $timestamps = false;

    public $casts = [
        'name' => 'string'
    ];

}
