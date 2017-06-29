<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopInicisLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_inicis_log', function(Blueprint $table){
          $table->bigInteger('oid')->unsigned();
          $table->string('p_tid', 255);
          $table->string('p_mid', 255);
          $table->string('p_auth_dt', 255)->nullable();
          $table->string('p_status', 255)->nullable();
          $table->string('p_type', 255)->nullable();
          $table->string('p_oid', 255)->nullable();
          $table->string('p_fn_nm', 255)->nullable();
          $table->string('p_auth_no', 255)->nullable();
          $table->integer('p_amt')->nullable();
          $table->string('p_rmesg1', 255)->nullable();

          $table->primary('oid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_inicis_log');
    }
}
