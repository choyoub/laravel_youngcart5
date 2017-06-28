<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopOrderAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_order_address', function(Blueprint $table){
          $table->increments('ad_id');
          $table->string('mb_id', 255);
          $table->string('ad_subject', 255);
          $table->tinyInteger('ad_default', 4);
          $table->string('ad_name', 255);
          $table->string('ad_tel', 255);
          $table->string('ad_hp', 255);
          $table->char('ad_zip1' 3);
          $table->char('ad_zip2' 3);
          $table->string('ad_addr1', 255);
          $table->string('ad_addr2', 255);
          $table->string('ad_addr3', 255);
          $table->string('ad_jibeon', 255);

          $table->primary('ad_id');
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
        Schema::dropIfExists('g5_shop_order_address');
    }
}
