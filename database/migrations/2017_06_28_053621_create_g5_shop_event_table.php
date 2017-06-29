<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_event', function(Blueprint $table){
          $table->increments('ev_id');
          $table->string('ev_skin', 255)->nullable();
          $table->string('ev_mobile_skin', 255)->nullable();
          $table->integer('ev_img_width')->nullable();
          $table->integer('ev_img_height')->nullable();
          $table->integer('ev_list_mod')->nullable();
          $table->integer('ev_list_row')->nullable();
          $table->integer('ev_mobile_img_width')->nullable();
          $table->integer('ev_mobile_img_height')->nullable();
          $table->integer('ev_mobile_list_mod')->nullable();
          $table->integer('ev_mobile_list_row')->nullable();
          $table->string('ev_subject', 255)->nullable();
          $table->tinyInteger('ev_subject_strong')->nullable();
          $table->text('ev_head_html')->nullable();
          $table->text('ev_tail_html')->nullable();
          $table->tinyInteger('ev_use')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_event');
    }
}
