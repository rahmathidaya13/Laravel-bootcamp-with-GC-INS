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
        Schema::create('peran', function(Blueprint $table){
            $table->bigIncrements('id_peran');
            $table->unsignedBigInteger('id_film');
            $table->unsignedBigInteger('id_cast');
            $table->foreign('id_film')->references('id_film')->on('film')->onDelete('cascade');
            $table->foreign('id_cast')->references('id_cast')->on('cast')->onDelete('cascade');
            $table->text('nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};
