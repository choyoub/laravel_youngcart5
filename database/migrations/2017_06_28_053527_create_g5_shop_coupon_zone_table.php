<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopCouponZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_coupon_zone', function(Blueprint $table){
          $table->increments('cz_id');
          $table->tinyInteger('cz_type');
          $table->string('cz_subject', 255);
          $table->date('cz_start');
          $table->date('cz_end');
          $table->string('cz_file', 255);
          $table->integer('cz_period');
          $table->integer('cz_point');
          $table->tinyInteger('cp_method');
          $table->string('cp_target', 255);
          $table->integer('cp_price');
          $table->tinyInteger('cp_type');
          $table->integer('cp_trunc');
          $table->integer('cp_minimum');
          $table->integer('cp_maximum');
          $table->integer('cz_download');
          $table->dateTime('cz_datetime');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_coupon_zone');
    }
}
