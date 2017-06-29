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
          $table->dateTime('nw_begin_time')->nullable();
          $table->dateTime('nw_end_time')->nullable();
          $table->integer('nw_disable_hours')->nullable();
          $table->integer('nw_left')->nullable();
          $table->integer('nw_top')->nullable();
          $table->integer('nw_height')->nullable();
          $table->integer('nw_width')->nullable();
          $table->text('nw_subject')->nullable();
          $table->text('nw_content')->nullable();
          $table->tinyInteger('nw_content_html')->nullable();

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
