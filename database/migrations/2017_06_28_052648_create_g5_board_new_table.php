<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5BoardNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_board_new', function(Blueprint $table){
          $table->increments('bn_id');
          $table->string('bo_table', 20);
          $table->intger('wr_id', 11);
          $table->intger('wr_parent', 11);
          $table->dateTime('bn_datetime');
          $table->string('mb_id', 20);

          $table->primary('bn_id');
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
        Schema::dropIfExists('g5_board_new');
    }
}
