<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopCouponZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_coupon_zone', function(Blueprint $table){
          $table->increments('cz_id');
          $table->tinyInteger('cz_type');
          $table->string('cz_subject', 255);
          $table->date('cz_start')->nullable();
          $table->date('cz_end')->nullable();
          $table->string('cz_file', 255)->nullable();
          $table->integer('cz_period')->nullable();
          $table->integer('cz_point')->nullable();
          $table->tinyInteger('cp_method')->nullable();
          $table->string('cp_target', 255)->nullable();
          $table->integer('cp_price')->nullable();
          $table->tinyInteger('cp_type')->nullable();
          $table->integer('cp_trunc')->nullable();
          $table->integer('cp_minimum')->nullable();
          $table->integer('cp_maximum')->nullable();
          $table->integer('cz_download')->nullable();
          $table->dateTime('cz_datetime')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_coupon_zone');
    }
}
