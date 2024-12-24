<?php

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('geo_timezones', function (Blueprint $table) {
            $table->string('name', 50)->primary();
            $table->string('country_code', 2)->nullable();
            $table->string('utc_std', 10)->nullable();
            $table->string('utc_dst', 10)->nullable();
            $table->string('abbreviation_std', 10)->nullable();
            $table->string('abbreviation_dst', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('geo_timezones');
    }
};
