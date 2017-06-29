<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_coupon', function(Blueprint $table){
          $table->increments('cp_no');
          $table->string('cp_id', 255);
          $table->string('cp_subject', 255);
          $table->tinyInteger('cp_method')->nullable();
          $table->string('cp_target', 255)->nullable();
          $table->string('mb_id', 255)->nullable();
          $table->integer('cz_id')->nullable();
          $table->date('cp_start')->nullable();
          $table->date('cp_end')->nullable();
          $table->integer('cp_price')->nullable();
          $table->tinyInteger('cp_type')->nullable();
          $table->integer('cp_trunc')->nullable();
          $table->integer('cp_minimum')->nullable();
          $table->integer('cp_maximum')->nullable();
          $table->bigInteger('od_id')->unsigned()->nullable();
          $table->dateTime('cp_datetime')->nullable();

          $table->unique('cp_id');
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
        Schema::dropIfExists('g5_shop_coupon');
    }
}
