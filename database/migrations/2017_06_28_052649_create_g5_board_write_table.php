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
          $table->integer('wr_num', 11);
          $table->string('wr_reply', 10);
          $table->integer('wr_parent', 11);
          $table->tinyInteger('wr_is_comment', 4);
          $table->integer('wr_comment', 11);
          $table->string('wr_comment_reply', 5);
          $table->string('ca_name', 255);
          $table->set('wr_option', ['html1', 'html2', 'secret', 'mail']);
          $table->string('wr_subject', 255);
          $table->text('wr_content');
          $table->text('wr_link1');
          $table->text('wr_link2');
          $table->integer('wr_link1_hit', 11);
          $table->integer('wr_link2_hit', 11);
          $table->integer('wr_hit', 11);
          $table->integer('wr_good', 11);
          $table->integer('wr_nogood', 11);
          $table->string('mb_id', 20);
          $table->string('wr_password', 255);
          $table->string('wr_name', 255);
          $table->string('wr_email', 255);
          $table->string('wr_homepage', 255);
          $table->dateTime('wr_datetime');
          $table->tinyInteger('wr_file', 4);
          $table->string('wr_last', 19);
          $table->string('wr_ip', 255);
          $table->string('wr_facebook_user', 255);
          $table->string('wr_twitter_user', 255);
          $table->string('wr_1', 255);
          $table->string('wr_2', 255);
          $table->string('wr_3', 255);
          $table->string('wr_4', 255);
          $table->string('wr_5', 255);
          $table->string('wr_6', 255);
          $table->string('wr_7', 255);
          $table->string('wr_8', 255);
          $table->string('wr_9', 255);
          $table->string('wr_10', 255);

          $table->primary('wr_id');
          $table->index(['wr_num', 'wr_reply', 'wr_parent']);
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
