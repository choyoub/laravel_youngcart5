<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5QaContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_qa_content', function(Blueprint $table){
          $table->increments('qa_id');
          $table->integer('qa_num', 11);
          $table->integer('qa_parent', 11);
          $table->integer('qa_related', 11);
          $table->string('mb_id', 20);
          $table->string('qa_name', 255);
          $table->string('qa_email', 255);
          $table->string('qa_hp', 255);
          $table->tinyInteger('qa_type', 4);
          $table->string('qa_category', 255);
          $table->tinyInteger('qa_email_recv', 4);
          $table->tinyInteger('qa_sms_recv', 4);
          $table->tinyInteger('qa_html', 4);
          $table->string('qa_subject', 255);
          $table->text('qa_content');
          $table->tinyInteger('qa_status', 4);
          $table->string('qa_file1', 255);
          $table->string('qa_source1', 255);
          $table->string('qa_file2', 255);
          $table->string('qa_source2', 255);
          $table->string('qa_ip', 255);
          $table->dateTime('qa_datetime');
          $table->string('qa_1', 255);
          $table->string('qa_2', 255);
          $table->string('qa_3', 255);
          $table->string('qa_4', 255);
          $table->string('qa_5', 255);

          $table->primary('qa_id');
          $table->index(['qa_num', 'qa_parent']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_qa_content');
    }
}
