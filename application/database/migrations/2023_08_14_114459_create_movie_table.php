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
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('nameMovie');
            $table->string('genres');
            $table->string('dateLaunch');
            $table->string('director');
            $table->mediumText('description');
            $table->string('castOne');
            $table->string('castTwo');
            $table->string('castThree');
            $table->mediumInteger('votes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
