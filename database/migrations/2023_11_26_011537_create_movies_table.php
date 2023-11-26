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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->date('year_release');
            $table->string('director', 50)->nullable(false);
            $table->string('genre', 50);
            $table->time('duration');
            $table->string('synopsis', 255);
            $table->string('language', 50);
            $table->string('puntuaction', 50);
            $table->string('actors', 255)->nullable(false);
            $table->string('image', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
