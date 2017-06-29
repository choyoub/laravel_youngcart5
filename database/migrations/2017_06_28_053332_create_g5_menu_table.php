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
          $table->string('me_link', 255)->nullable();
          $table->string('me_target', 255)->nullable();
          $table->integer('me_order')->default(0);
          $table->tinyInteger('me_use')->nullable();
          $table->tinyInteger('me_mobile_use')->nullable();

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
