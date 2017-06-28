<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopItemOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_item_option', function(Blueprint $table){
          $table->increments('io_no');
          $table->string('io_id', 255);
          $table->tinyInteger('io_type', 4);
          $table->string('it_id', 20);
          $table->integer('io_price', 11);
          $table->integer('io_stock_qty', 11);
          $table->integer('io_noti_qty', 11);
          $table->tinyInteger('io_use', 4);

          $table->primary('io_no');
          $table->index('io_id');
          $table->index('it_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_item_option');
    }
}
