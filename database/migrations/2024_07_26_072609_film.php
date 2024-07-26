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
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->string('slug');
            $table->string('foto');
            $table->text('deskripsi');
            $table->string('url_video');
            $table->unsignedBigInteger('id_kategori')

            ;
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('genre_film', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_genre');
            $table->unsignedBigInteger('id_film');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('id_film')->references('id')->on('film')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('aktor_film', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aktor');
            $table->unsignedBigInteger('id_film');
            $table->foreign('id_aktor')->references('id')->on('aktors')->onDelete('cascade');
            $table->foreign('id_film')->references('id')->on('film')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
        Schema::dropIfExists('genre_film');
        Schema::dropIfExists('aktor_film');
    }
};
