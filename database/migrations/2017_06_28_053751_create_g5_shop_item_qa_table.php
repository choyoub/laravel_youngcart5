<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopItemQaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_item_qa', function(Blueprint $table){
          $table->increments('iq_id');
          $table->string('it_id', 20);
          $table->string('mb_id', 255);
          $table->tinyInteger('iq_secret');
          $table->string('iq_name', 255);
          $table->string('iq_email', 255);
          $table->string('iq_hp', 255);
          $table->string('iq_password', 255);
          $table->string('iq_subject', 255);
          $table->text('iq_question');
          $table->text('iq_answer');
          $table->dateTime('iq_time');
          $table->string('iq_ip', 25);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_item_qa');
    }
}
