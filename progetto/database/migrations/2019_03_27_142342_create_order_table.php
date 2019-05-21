<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('data');
            $table->integer('order_number');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_order_id');
            $table->unsignedBigInteger('courier_id');
            $table->unsignedBigInteger('payment_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('status_order_id')->references('id')->on('status_order')->onDelete('cascade');
            $table->foreign('courier_id')->references('id')->on('courier');
            $table->foreign('payment_id')->references('id')->on('payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
