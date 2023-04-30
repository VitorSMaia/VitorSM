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
        Schema::create('xps', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('image');
            $table->string('url');
            $table->longText('office');
            $table->longText('description');
            $table->date('dt_start');
            $table->date('dt_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xps');
    }
};
