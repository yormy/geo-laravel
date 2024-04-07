<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        $path = __DIR__.'../../seeders/Locations/Data/timezones.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
};
