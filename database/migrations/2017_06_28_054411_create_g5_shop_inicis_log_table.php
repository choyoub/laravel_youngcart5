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
          $table->bigInteger('oid', 20)->unsigned();
          $table->string('P_TID', 255);
          $table->string('P_MID', 255);
          $table->string('P_AUTH_DT', 255);
          $table->string('P_STATUS', 255);
          $table->string('P_TYPE', 255);
          $table->string('P_OID', 255);
          $table->string('P_FN_NM', 255);
          $table->string('P_AUTH_NO', 255);
          $table->integer('P_AMT', 11);
          $table->string('P_RMESG1', 255);

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
