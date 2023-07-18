<?php
// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('geo_country_names', function (Blueprint $table) {
            $table->string('iso3', 3)->unique()->primary();
            $table->string('iso2', 2)->unique();
            $table->json('name');
            $table->string('dial_prefix');
            $table->string('timezone');
        });
    }

    public function down()
    {
        Schema::dropIfExists('geo_country_names');
    }
};
