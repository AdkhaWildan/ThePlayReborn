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
        Schema::create('games_tabel', function (Blueprint $table) {
            $table->id('gameid');
            $table->string('gamename');
            $table->string('developer');
            $table->string('publisher');
            $table->string('description');
            $table->date('releasedate');
            $table->integer('price');
            $table->mediumblob('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games_tabel');
    }
};