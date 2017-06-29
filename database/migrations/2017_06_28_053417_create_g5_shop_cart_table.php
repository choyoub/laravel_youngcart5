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
          $table->string('it_name', 255)->nullable();
          $table->tinyInteger('it_sc_type');
          $table->tinyInteger('it_sc_method')->nullable();
          $table->integer('it_sc_price')->nullable();
          $table->integer('it_sc_minimum')->nullable();
          $table->integer('it_sc_qty')->nullable();
          $table->string('ct_status', 255)->nullable();
          $table->text('ct_history')->nullable();
          $table->integer('ct_price')->nullable();
          $table->integer('ct_point')->nullable();
          $table->integer('cp_price')->nullable();
          $table->tinyInteger('ct_point_use')->nullable();
          $table->tinyInteger('ct_stock_use')->nullable();
          $table->string('ct_option', 255)->nullable();
          $table->integer('ct_qty')->nullable();
          $table->tinyInteger('ct_notax')->nullable();
          $table->string('io_id', 255)->nullable();
          $table->tinyInteger('io_type')->nullable();
          $table->integer('io_price')->nullable();
          $table->dateTime('ct_time')->nullable();
          $table->string('ct_ip', 25)->nullable();
          $table->tinyInteger('ct_send_cost')->nullable();
          $table->tinyInteger('ct_direct')->nullable();
          $table->tinyInteger('ct_select')->nullable();
          $table->dateTime('ct_select_time')->nullable();

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
