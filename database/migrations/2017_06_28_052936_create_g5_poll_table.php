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
          $table->string('po_subject', 255)->nullable();
          $table->string('po_poll1', 255)->nullable();
          $table->string('po_poll2', 255)->nullable();
          $table->string('po_poll3', 255)->nullable();
          $table->string('po_poll4', 255)->nullable();
          $table->string('po_poll5', 255)->nullable();
          $table->string('po_poll6', 255)->nullable();
          $table->string('po_poll7', 255)->nullable();
          $table->string('po_poll8', 255)->nullable();
          $table->string('po_poll9', 255)->nullable();
          $table->string('po_poll10', 255)->nullable();
          $table->integer('po_cnt1')->nullable();
          $table->integer('po_cnt2')->nullable();
          $table->integer('po_cnt3')->nullable();
          $table->integer('po_cnt4')->nullable();
          $table->integer('po_cnt5')->nullable();
          $table->integer('po_cnt6')->nullable();
          $table->integer('po_cnt7')->nullable();
          $table->integer('po_cnt8')->nullable();
          $table->integer('po_cnt9')->nullable();
          $table->integer('po_cnt10')->nullable();
          $table->string('po_etc', 255)->nullable();
          $table->tinyInteger('po_level')->nullable();
          $table->integer('po_point')->nullable();
          $table->date('po_date')->nullable();
          $table->mediumText('po_ips')->nullable();
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
