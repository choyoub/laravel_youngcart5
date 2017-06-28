<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopSendcostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_sendcost', function(Blueprint $table){
          $table->increments('sc_id');
          $table->string('sc_name', 255);
          $table->string('sc_zip1', 10);
          $table->string('sc_zip2', 10);
          $table->integer('sc_price', 11);

          $table->primary('sc_id');
          $table->index('sc_zip1');
          $table->index('sc_zip2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_sendcost');
    }
}
