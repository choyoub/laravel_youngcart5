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
          $table->integer('wr_id');
          $table->integer('bf_no');
          $table->string('bf_source', 255);
          $table->string('bf_file', 255);
          $table->integer('bf_download');
          $table->text('bf_content')->nullable();
          $table->integer('bf_filesize')->nullable();
          $table->integer('bf_width')->nullable();
          $table->smallInteger('bf_height')->nullable();
          $table->tinyInteger('bf_type')->nullable();
          $table->dateTime('bf_datetime')->nullable();

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
