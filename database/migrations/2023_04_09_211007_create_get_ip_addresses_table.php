<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('get_ip_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('countryName');
            $table->string('countryCode');
            $table->string('regionCode');
            $table->string('regionName');
            $table->string('cityName');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('get_ip_addresses');
    }
};
