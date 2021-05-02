<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExplorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explorations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users') ->onUpdate('cascade')->onDelete('cascade');
            $table->char('province_id', 4);
            $table->foreign('province_id')->references('id')->on('indonesia_provinces') ->onUpdate('cascade')->onDelete('cascade');
            $table->char('city_id', 4);
            $table->foreign('city_id')->references('id')->on('indonesia_cities') ->onUpdate('cascade')->onDelete('cascade');
             $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories') ->onUpdate('cascade')->onDelete('cascade');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('nama');
            $table->string('slug');
            $table->string('pulau');
            $table->text('alamat');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('explorations');
    }
}
