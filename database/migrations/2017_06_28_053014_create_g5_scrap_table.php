<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ScrapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_scrap', function(Blueprint $table){
          $table->increments('ms_id');
          $table->string('mb_id', 20);
          $table->string('bo_table', 20);
          $table->string('wr_id', 15)->nullable();
          $table->dateTime('ms_datetime')->nullable();

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
        Schema::dropIfExists('g5_scrap');
    }
}
