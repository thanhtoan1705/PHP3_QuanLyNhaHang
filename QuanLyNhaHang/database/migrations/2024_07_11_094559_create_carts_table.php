<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dish_id');
            $table->bigInteger('discount');
            $table->bigInteger('quantity');
            $table->bigInteger('total_price');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dish_id')->references('id')->on('dishes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
