<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopOrderDeleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_order_delete', function(Blueprint $table){
          $table->increments('de_id');
          $table->string('de_key', 255);
          $table->longtext('de_data');
          $table->string('mb_id', 20);
          $table->string('de_ip', 255);
          $table->dateTime('de_datetime');

          $table->primary('de_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_order_delete');
    }
}
