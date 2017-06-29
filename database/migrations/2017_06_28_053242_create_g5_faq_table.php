<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5FaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_faq', function(Blueprint $table){
          $table->increments('fa_id');
          $table->integer('fm_id');
          $table->text('fa_subject')->nullable();
          $table->text('fa_content')->nullable();
          $table->integer('fa_order')->default(0);

          $table->index('fm_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_faq');
    }
}
