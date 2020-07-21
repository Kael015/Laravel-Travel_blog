<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id_artikel');
            $table->unsignedInteger('id_user');
            $table->string('judul_aritkel', 100);
            $table->longText('isi_artikel');
            $table->string('url', 100);
            $table->timestamps();
        });

        Schema::table('artikel', function(Blueprint $table){
            $table->foreign('id_user')->references('id_user')->on('user')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
