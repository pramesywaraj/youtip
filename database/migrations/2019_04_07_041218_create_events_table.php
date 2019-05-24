<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->integer('no_rekening')->unique();
            $table->string('nama_penjual');
            $table->string('image_penjual', 100);
            $table->string('no_hp', 20)->nullable();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->text('deskripsi');
            $table->string('negara');
            $table->string('image', 100);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
