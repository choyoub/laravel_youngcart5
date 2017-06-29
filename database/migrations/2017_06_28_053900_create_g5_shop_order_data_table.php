<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopOrderDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_order_data', function(Blueprint $table){
          $table->bigInteger('od_id')->unsigned();
          $table->bigInteger('cart_id')->unsigned();
          $table->string('mb_id', 20);
          $table->string('dt_pg', 255)->nullable();
          $table->text('dt_data')->nullable();
          $table->dateTime('dt_time')->nullable();

          $table->index('od_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_order_data');
    }
}
