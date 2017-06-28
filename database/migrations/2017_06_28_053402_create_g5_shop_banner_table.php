<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_banner', function(Blueprint $table){
          $table->increments('bn_id');
          $table->string('bn_alt', 255);
          $table->string('bn_url', 255);
          $table->string('bn_device', 10);
          $table->string('bn_position', 255);
          $table->tinyInteger('bn_border');
          $table->tinyInteger('bn_new_win');
          $table->dateTime('bn_begin_time');
          $table->dateTime('bn_end_time');
          $table->dateTime('bn_time');
          $table->integer('bn_hit');
          $table->integer('bn_order');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_banner');
    }
}
