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
          $table->tinyInteger('cz_type', 4);
          $table->string('cz_subject', 255);
          $table->date('cz_start');
          $table->date('cz_end');
          $table->string('cz_file', 255);
          $table->integer('cz_period', 11);
          $table->integer('cz_point', 11);
          $table->tinyInteger('cp_method', 4);
          $table->string('cp_target', 255);
          $table->integer('cp_price', 11);
          $table->tinyInteger('cp_type', 4);
          $table->integer('cp_trunc', 11);
          $table->integer('cp_minimum', 11);
          $table->integer('cp_maximum', 11);
          $table->integer('cz_download', 11);
          $table->dateTime('cz_datetime');

          $table->primary('cz_id');
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
