<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5PollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_poll', function(Blueprint $table){
          $table->increments('po_id');
          $table->string('po_subject', 255);
          $table->string('po_poll1', 255);
          $table->string('po_poll2', 255);
          $table->string('po_poll3', 255);
          $table->string('po_poll4', 255);
          $table->string('po_poll5', 255);
          $table->string('po_poll6', 255);
          $table->string('po_poll7', 255);
          $table->string('po_poll8', 255);
          $table->string('po_poll9', 255);
          $table->string('po_poll10', 255);
          $table->integer('po_cnt1', 11);
          $table->integer('po_cnt2', 11);
          $table->integer('po_cnt3', 11);
          $table->integer('po_cnt4', 11);
          $table->integer('po_cnt5', 11);
          $table->integer('po_cnt6', 11);
          $table->integer('po_cnt7', 11);
          $table->integer('po_cnt8', 11);
          $table->integer('po_cnt9', 11);
          $table->integer('po_cnt10', 11);
          $table->string('po_etc', 255);
          $table->tinyInteger('po_level', 4);
          $table->integer('po_point', 11);
          $table->date('po_date');
          $table->mediumText('po_ips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_poll');
    }
}
