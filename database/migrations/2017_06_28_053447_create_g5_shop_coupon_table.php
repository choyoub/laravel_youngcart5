<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_coupon', function(Blueprint $table){
          $table->increments('cp_no');
          $table->string('cp_id', 255);
          $table->string('cp_subject', 255);
          $table->tinyInteger('cp_method');
          $table->string('cp_target', 255);
          $table->string('mb_id', 255);
          $table->integer('cz_id');
          $table->date('cp_start');
          $table->date('cp_end');
          $table->integer('cp_price');
          $table->tinyInteger('cp_type');
          $table->integer('cp_trunc');
          $table->integer('cp_minimum');
          $table->integer('cp_maximum');
          $table->bigInteger('od_id')->unsigned();
          $table->dateTime('cp_datetime');

          $table->unique('cp_id');
          $table->index('mb_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_coupon');
    }
}