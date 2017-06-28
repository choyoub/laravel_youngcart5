<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5QaConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_qa_config', function(Blueprint $table){
          $table->string('qa_title', 255);
          $table->string('qa_category', 255);
          $table->string('qa_skin', 255);
          $table->string('qa_mobile_skin', 255);
          $table->tinyInteger('qa_use_email', 4);
          $table->tinyInteger('qa_req_email', 4);
          $table->tinyInteger('qa_use_hp', 4);
          $table->tinyInteger('qa_req_hp', 4);
          $table->tinyInteger('qa_use_sms', 4);
          $table->string('qa_send_number', 255);
          $table->string('qa_admin_hp', 255);
          $table->string('qa_admin_email', 255);
          $table->tinyInteger('qa_use_editor', 4);
          $table->integer('qa_subject_len', 11);
          $table->integer('qa_mobile_subject_len', 11);
          $table->integer('qa_page_rows', 11);
          $table->integer('qa_mobile_page_rows', 11);
          $table->integer('qa_image_width', 11);
          $table->integer('qa_upload_size', 11);
          $table->text('qa_insert_content');
          $table->string('qa_include_head', 255);
          $table->string('qa_include_tail', 255);
          $table->text('qa_content_head');
          $table->text('qa_content_tail');
          $table->text('qa_mobile_content_head');
          $table->text('qa_mobile_content_tail');
          $table->string('qa_1_subj', 255);
          $table->string('qa_2_subj', 255);
          $table->string('qa_3_subj', 255);
          $table->string('qa_4_subj', 255);
          $table->string('qa_5_subj', 255);
          $table->string('qa_1', 255);
          $table->string('qa_2', 255);
          $table->string('qa_3', 255);
          $table->string('qa_4', 255);
          $table->string('qa_5', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_qa_config');
    }
}
