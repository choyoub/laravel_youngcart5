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
          $table->integer('fm_id', 11);
          $table->text('fa_subject');
          $table->text('fa_content');
          $table->integer('fa_order', 11);

          $table->primary('fa_id');
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
