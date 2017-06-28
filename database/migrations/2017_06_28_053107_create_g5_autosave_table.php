<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5AutosaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_autosave', function(Blueprint $table){
          $table->increments('as_id');
          $table->string('mb_id', 20);
          $table->bigInteger('as_uid')->unsigned();
          $table->string('as_subject', 255);
          $table->text('as_content');
          $table->dateTime('as_datetime');

          $table->unique('as_uid');
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
        Schema::dropIfExists('g5_autosave');
    }
}
