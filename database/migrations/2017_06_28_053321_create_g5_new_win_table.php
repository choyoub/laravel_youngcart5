<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5NewWinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_new_win', function(Blueprint $table){
          $table->increments('nw_id');
          $table->string('nw_division', 10)->default('both');
          $table->string('nw_device', 10)->default('both');
          $table->dateTime('nw_begin_time');
          $table->dateTime('nw_end_time');
          $table->integer('nw_disable_hours');
          $table->integer('nw_left');
          $table->integer('nw_top');
          $table->integer('nw_height');
          $table->integer('nw_width');
          $table->text('nw_subject');
          $table->text('nw_content');
          $table->tinyInteger('nw_content_html');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_new_win');
    }
}
