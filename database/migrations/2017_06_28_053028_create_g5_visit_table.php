<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5VisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_visit', function(Blueprint $table){
          $table->integer('vi_id');
          $table->string('vi_ip', 255);
          $table->date('vi_date');
          $table->time('vi_time')->nullable();
          $table->text('vi_referer')->nullable();
          $table->string('vi_agent', 255)->nullable();

          $table->primary('vi_id');
          $table->unique(['vi_ip', 'vi_date']);
          $table->index('vi_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_visit');
    }
}
