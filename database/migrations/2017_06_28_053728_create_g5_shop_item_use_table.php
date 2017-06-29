<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopItemUseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_item_use', function(Blueprint $table){
          $table->increments('is_id');
          $table->string('it_id', 20);
          $table->string('mb_id', 255);
          $table->string('is_name', 255)->nullable();
          $table->string('is_password', 255)->nullable();
          $table->tinyInteger('is_score')->nullable();
          $table->string('is_subject', 255)->nullable();
          $table->text('is_content')->nullable();
          $table->dateTime('is_time')->nullable();
          $table->string('is_ip', 25)->nullable();
          $table->tinyInteger('is_confirm')->nullable();

          $table->index('it_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_item_use');
    }
}
