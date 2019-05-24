<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeranjangItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->unsignedBigInteger('jastiper_id');
            $table->integer('no_rekening')->unique();
            $table->string('name', 100);
            $table->float('price');
            $table->string('image', 100);
            $table->string('no_hp', 20)->nullable();
            $table->integer('jumlah')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('jastiper_id')->references('id')->on('users');
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
        Schema::dropIfExists('keranjang_items');
    }
}
