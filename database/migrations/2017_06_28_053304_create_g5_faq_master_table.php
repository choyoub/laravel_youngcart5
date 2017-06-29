<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5FaqMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_faq_master', function(Blueprint $table){
          $table->increments('fm_id');
          $table->string('fm_subject', 255);
          $table->text('fm_head_html')->nullable();
          $table->text('fm_tail_html')->nullable();
          $table->text('fm_mobile_head_html')->nullable();
          $table->text('fm_mobile_tail_html')->nullable();
          $table->integer('fm_order')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_faq_master');
    }
}
