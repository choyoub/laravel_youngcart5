<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5PopularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_popular', function(Blueprint $table){
          $table->increments('pp_id');
          $table->string('pp_word', 50);
          $table->date('pp_date');
          $table->string('pp_ip', 50);

          $table->primary('pp_id');
          $table->index(['pp_date', 'pp_word', 'pp_ip']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_popular');
    }
}
