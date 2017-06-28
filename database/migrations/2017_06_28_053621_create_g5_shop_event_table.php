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
          $table->string('ev_skin', 255);
          $table->string('ev_mobile_skin', 255);
          $table->integer('ev_img_width', 11);
          $table->integer('ev_img_height', 11);
          $table->integer('ev_list_mod', 11);
          $table->integer('ev_list_row', 11);
          $table->integer('ev_mobile_img_width', 11);
          $table->integer('ev_mobile_img_height', 11);
          $table->integer('ev_mobile_list_mod', 11);
          $table->integer('ev_mobile_list_row', 11);
          $table->string('ev_subject', 255);
          $table->tinyInteger('ev_subject_strong', 4);
          $table->text('ev_head_html');
          $table->text('ev_tail_html');
          $table->tinyInteger('ev_use', 4);

          $table->primary('ev_id');
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
