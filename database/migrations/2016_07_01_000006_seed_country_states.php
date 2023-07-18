<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{    public function up()
    {
        $path = 'database/seeders/Locations/Data/states.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
};
