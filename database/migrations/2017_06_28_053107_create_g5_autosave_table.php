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
          $table->string('as_subject', 255)->nullable();
          $table->text('as_content')->nullable();
          $table->dateTime('as_datetime')->nullable();

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
