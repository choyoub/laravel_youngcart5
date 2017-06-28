<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5VisitSumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_visit_sum', function(Blueprint $table){
          $table->time('vs_date');
          $table->integer('vs_count', 11);

          $table->primary('vs_date');
          $table->index('vs_count');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_visit_sum');
    }
}
