<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id('idpost');
            $table->string('judul');
            $table->unsignedBigInteger('idkategori');
            $table->text('isipost');
            $table->string('file_gambar')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('idpenulis');

            $table->foreign('idkategori')->references('idkategori')->on('kategori');
            $table->foreign('idpenulis')->references('idpenulis')->on('penulis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
