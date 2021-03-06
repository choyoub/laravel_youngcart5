<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5GroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_group', function(Blueprint $table){
          $table->string('gr_id', 10);
          $table->string('gr_subject', 255);
          $table->enum('gr_device', ['both', 'pc', 'mobile'])->default('both');
          $table->string('gr_admin', 255)->nullable();
          $table->tinyInteger('gr_use_access')->nullable();
          $table->integer('gr_order')->nullable();
          $table->string('gr_1_subj', 255)->nullable();
          $table->string('gr_2_subj', 255)->nullable();
          $table->string('gr_3_subj', 255)->nullable();
          $table->string('gr_4_subj', 255)->nullable();
          $table->string('gr_5_subj', 255)->nullable();
          $table->string('gr_6_subj', 255)->nullable();
          $table->string('gr_7_subj', 255)->nullable();
          $table->string('gr_8_subj', 255)->nullable();
          $table->string('gr_9_subj', 255)->nullable();
          $table->string('gr_10_subj', 255)->nullable();
          $table->string('gr_1', 255)->nullable();
          $table->string('gr_2', 255)->nullable();
          $table->string('gr_3', 255)->nullable();
          $table->string('gr_4', 255)->nullable();
          $table->string('gr_5', 255)->nullable();
          $table->string('gr_6', 255)->nullable();
          $table->string('gr_7', 255)->nullable();
          $table->string('gr_8', 255)->nullable();
          $table->string('gr_9', 255)->nullable();
          $table->string('gr_10', 255)->nullable();

          $table->primary('gr_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_group');
    }
}
