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
          $table->string('qa_category', 255)->nullable();
          $table->string('qa_skin', 255)->nullable();
          $table->string('qa_mobile_skin', 255)->nullable();
          $table->tinyInteger('qa_use_email')->nullable();
          $table->tinyInteger('qa_req_email')->nullable();
          $table->tinyInteger('qa_use_hp')->nullable();
          $table->tinyInteger('qa_req_hp')->nullable();
          $table->tinyInteger('qa_use_sms')->nullable();
          $table->string('qa_send_number', 255)->nullable();
          $table->string('qa_admin_hp', 255)->nullable();
          $table->string('qa_admin_email', 255)->nullable();
          $table->tinyInteger('qa_use_editor')->nullable();
          $table->integer('qa_subject_len')->nullable();
          $table->integer('qa_mobile_subject_len')->nullable();
          $table->integer('qa_page_rows')->nullable();
          $table->integer('qa_mobile_page_rows')->nullable();
          $table->integer('qa_image_width')->nullable();
          $table->integer('qa_upload_size')->nullable();
          $table->text('qa_insert_content')->nullable();
          $table->string('qa_include_head', 255)->nullable();
          $table->string('qa_include_tail', 255)->nullable();
          $table->text('qa_content_head')->nullable();
          $table->text('qa_content_tail')->nullable();
          $table->text('qa_mobile_content_head')->nullable();
          $table->text('qa_mobile_content_tail')->nullable();
          $table->string('qa_1_subj', 255)->nullable();
          $table->string('qa_2_subj', 255)->nullable();
          $table->string('qa_3_subj', 255)->nullable();
          $table->string('qa_4_subj', 255)->nullable();
          $table->string('qa_5_subj', 255)->nullable();
          $table->string('qa_1', 255)->nullable();
          $table->string('qa_2', 255)->nullable();
          $table->string('qa_3', 255)->nullable();
          $table->string('qa_4', 255)->nullable();
          $table->string('qa_5', 255)->nullable();
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
