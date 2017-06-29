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
          $table->string('bn_alt', 255)->nullable();
          $table->string('bn_url', 255)->nullable();
          $table->string('bn_device', 10)->nullable();
          $table->string('bn_position', 255)->nullable();
          $table->tinyInteger('bn_border')->nullable();
          $table->tinyInteger('bn_new_win')->nullable();
          $table->dateTime('bn_begin_time')->nullable();
          $table->dateTime('bn_end_time')->nullable();
          $table->dateTime('bn_time')->nullable();
          $table->integer('bn_hit')->nullable();
          $table->integer('bn_order')->default(0);

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
