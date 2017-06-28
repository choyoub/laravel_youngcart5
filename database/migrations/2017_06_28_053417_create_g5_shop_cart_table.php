<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_cart', function(Blueprint $table){
          $table->increments('ct_id');
          $table->bigInteger('od_id')->unsigned();
          $table->string('mb_id', 255);
          $table->string('it_id', 20);
          $table->string('it_name', 255);
          $table->tinyInteger('it_sc_type');
          $table->tinyInteger('it_sc_method');
          $table->integer('it_sc_price');
          $table->integer('it_sc_minimum');
          $table->integer('it_sc_qty');
          $table->string('ct_status', 255);
          $table->text('ct_history');
          $table->integer('ct_price');
          $table->integer('ct_point');
          $table->integer('cp_price');
          $table->tinyInteger('ct_point_use');
          $table->tinyInteger('ct_stock_use');
          $table->string('ct_option', 255);
          $table->integer('ct_qty');
          $table->tinyInteger('ct_notax');
          $table->string('io_id', 255);
          $table->tinyInteger('io_type');
          $table->integer('io_price');
          $table->dateTime('ct_time');
          $table->string('ct_ip', 25);
          $table->tinyInteger('ct_send_cost');
          $table->tinyInteger('ct_direct');
          $table->tinyInteger('ct_select');
          $table->dateTime('ct_select_time');

          $table->index('od_id');
          $table->index('it_id');
          $table->index('ct_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_cart');
    }
}
