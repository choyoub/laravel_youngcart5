<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5BoardGoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_board_good', function(Blueprint $table){
          $table->increments('bg_id');
          $table->string('bo_table', 20);
          $table->integer('wr_id');
          $table->string('mb_id', 20);
          $table->string('bg_flag', 255);
          $table->dateTime('bg_datetime');

          $table->unique(['bo_table', 'wr_id', 'mb_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_board_good');
    }
}
