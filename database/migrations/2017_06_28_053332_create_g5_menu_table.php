<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5MenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_menu', function(Blueprint $table){
          $table->increments('me_id');
          $table->string('me_code', 255);
          $table->string('me_name', 255);
          $table->string('me_link', 255);
          $table->string('me_target', 255);
          $table->integer('me_order', 11);
          $table->tinyInteger('me_use', 4);
          $table->tinyInteger('me_mobile_use', 4);

          $table->primary('me_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_menu');
    }
}
