<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopItemStocksmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_item_stocksms', function(Blueprint $table){
          $table->increments('ss_id');
          $table->string('it_id', 20);
          $table->string('ss_hp', 255);
          $table->tinyInteger('ss_send');
          $table->dateTime('ss_send_time');
          $table->dateTime('ss_datetime');
          $table->string('ss_ip', 25);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_item_stocksms');
    }
}