<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopWishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_wish', function(Blueprint $table){
          $table->increments('wi_id');
          $table->string('mb_id', 255);
          $table->string('it_id', 20);
          $table->dateTime('wi_time')->nullable();
          $table->string('wi_ip', 25)->nullable();

          $table->index('mb_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_wish');
    }
}
