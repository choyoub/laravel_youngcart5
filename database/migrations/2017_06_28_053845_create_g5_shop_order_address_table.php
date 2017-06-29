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
          $table->string('ad_subject', 255)->nullable();
          $table->tinyInteger('ad_default')->nullable();
          $table->string('ad_name', 255)->nullable();
          $table->string('ad_tel', 255)->nullable();
          $table->string('ad_hp', 255)->nullable();
          $table->char('ad_zip1', 3)->nullable();
          $table->char('ad_zip2', 3)->nullable();
          $table->string('ad_addr1', 255)->nullable();
          $table->string('ad_addr2', 255)->nullable();
          $table->string('ad_addr3', 255)->nullable();
          $table->string('ad_jibeon', 255)->nullable();

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
