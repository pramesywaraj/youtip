<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('keranjangs_id');
            $table->string('ShipName', 100);
            $table->text('alamat');
            $table->string('kota', 50);
            $table->string('zipcode', 20);
            $table->string('no_hp', 20);
            $table->string('buktitransfer', 100);
            $table->timestamps();
            $table->foreign('keranjangs_id')->references('id')->on('keranjangs')->onDelete('CASCADE');
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
        Schema::dropIfExists('orders');
    }
}
