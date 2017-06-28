<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5BoardFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_board_file', function(Blueprint $table){
          $table->string('bo_table', 20);
          $table->integer('wr_id', 11);
          $table->integer('bf_no', 11);
          $table->string('bf_source', 255);
          $table->string('bf_file', 255);
          $table->integer('bf_download', 11);
          $table->text('bf_content');
          $table->integer('bf_filesize', 11);
          $table->integer('bf_width', 11);
          $table->smallInteger('bf_height', 6);
          $table->tinyInteger('bf_type', 4);
          $table->dateTime('bf_datetime');

          $table->primary(['bo_table', 'wr_id','bf_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_board_file');
    }
}
