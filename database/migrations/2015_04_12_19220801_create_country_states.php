<?php

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('geo_country_states', function (Blueprint $table) {
            $table->id();
            $table->string('name_english');
            $table->string('name_local');
            $table->string('iso3');
            $table->foreign('iso3')->references('iso3')->on('geo_country_names')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('geo_country_states');
    }
};
