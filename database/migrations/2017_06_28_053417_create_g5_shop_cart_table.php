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
          $table->bigInteger('od_id', 20)->unsigned();
          $table->string('mb_id', 255);
          $table->string('it_id', 20);
          $table->string('it_name', 255);
          $table->tinyInteger('it_sc_type', 4);
          $table->tinyInteger('it_sc_method', 4);
          $table->integer('it_sc_price', 11);
          $table->integer('it_sc_minimum', 11);
          $table->integer('it_sc_qty', 11);
          $table->string('ct_status', 255);
          $table->text('ct_history');
          $table->integer('ct_price', 11);
          $table->integer('ct_point', 11);
          $table->integer('cp_price', 11);
          $table->tinyInteger('ct_point_use', 4);
          $table->tinyInteger('ct_stock_use', 4);
          $table->string('ct_option', 255);
          $table->integer('ct_qty', 11);
          $table->tinyInteger('ct_notax', 4);
          $table->string('io_id', 255);
          $table->tinyInteger('io_type', 4);
          $table->integer('io_price', 11);
          $table->dateTime('ct_time');
          $table->string('ct_ip', 25);
          $table->tinyInteger('ct_send_cost', 4);
          $table->tinyInteger('ct_direct', 4);
          $table->tinyInteger('ct_select', 4);
          $table->dateTime('ct_select_time');

          $table->primary('ct_id');
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
