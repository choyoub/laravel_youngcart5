<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopCouponLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_coupon_log', function(Blueprint $table){
          $table->increments('cl_id');
          $table->string('cp_id', 255);
          $table->string('mb_id', 255);
          $table->bigInteger('od_id');
          $table->integer('cp_price')->nullable();
          $table->dateTime('cl_datetime')->nullable();

          $table->index('mb_id');
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
        Schema::dropIfExists('g5_shop_coupon_log');
    }
}
