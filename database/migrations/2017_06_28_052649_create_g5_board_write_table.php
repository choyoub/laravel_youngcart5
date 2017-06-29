<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5BoardWriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_board_write', function(Blueprint $table){
          $table->increments('wr_id');
          $table->string('bo_table', 20);
          $table->integer('wr_num');
          $table->string('wr_reply', 10);
          $table->integer('wr_parent');
          $table->tinyInteger('wr_is_comment')->nullable();
          $table->integer('wr_comment')->nullable();
          $table->string('wr_comment_reply', 5)->nullable();
          $table->string('ca_name', 255)->nullable();
          $table->enum('wr_option', ['html1', 'html2', 'secret', 'mail'])->nullable();
          $table->string('wr_subject', 255)->nullable();
          $table->text('wr_content')->nullable();
          $table->text('wr_link1')->nullable();
          $table->text('wr_link2')->nullable();
          $table->integer('wr_link1_hit')->nullable();
          $table->integer('wr_link2_hit')->nullable();
          $table->integer('wr_hit')->nullable();
          $table->integer('wr_good')->nullable();
          $table->integer('wr_nogood')->nullable();
          $table->string('mb_id', 20)->nullable();
          $table->string('wr_password', 255)->nullable();
          $table->string('wr_name', 255)->nullable();
          $table->string('wr_email', 255)->nullable();
          $table->string('wr_homepage', 255)->nullable();
          $table->dateTime('wr_datetime')->nullable();
          $table->tinyInteger('wr_file')->nullable();
          $table->string('wr_last', 19)->nullable();
          $table->string('wr_ip', 255)->nullable();
          $table->string('wr_facebook_user', 255)->nullable();
          $table->string('wr_twitter_user', 255)->nullable();
          $table->string('wr_1', 255)->nullable();
          $table->string('wr_2', 255)->nullable();
          $table->string('wr_3', 255)->nullable();
          $table->string('wr_4', 255)->nullable();
          $table->string('wr_5', 255)->nullable();
          $table->string('wr_6', 255)->nullable();
          $table->string('wr_7', 255)->nullable();
          $table->string('wr_8', 255)->nullable();
          $table->string('wr_9', 255)->nullable();
          $table->string('wr_10', 255)->nullable();

          $table->index(['bo_table', 'wr_num', 'wr_reply', 'wr_parent']);
          $table->index(['wr_is_comment', 'wr_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_board_write');
    }
}
