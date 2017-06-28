<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5BoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_board', function(Blueprint $table){
          $table->string('bo_table', 20);
          $table->string('gr_id', 255);
          $table->string('bo_subject', 255);
          $table->string('bo_mobile_subject', 255);
          $table->enum('bo_device', ['both', 'pc', 'mobile'])->default('both');
          $table->string('bo_admin', 255);
          $table->tinyInteger('bo_list_level', 4);
          $table->tinyInteger('bo_read_level', 4);
          $table->tinyInteger('bo_write_level', 4);
          $table->tinyInteger('bo_reply_level', 4);
          $table->tinyInteger('bo_comment_level', 4);
          $table->tinyInteger('bo_upload_level', 4);
          $table->tinyInteger('bo_download_level', 4);
          $table->tinyInteger('bo_html_level', 4);
          $table->tinyInteger('bo_link_level', 4);
          $table->tinyInteger('bo_count_delete', 4);
          $table->tinyInteger('bo_count_modify', 4);
          $table->integer('bo_read_point', 11);
          $table->integer('bo_write_point', 11);
          $table->integer('bo_comment_point', 11);
          $table->integer('bo_download_point', 11);
          $table->tinyInteger('bo_use_category', 4);
          $table->text('bo_category_list');
          $table->tinyInteger('bo_use_sideview', 4);
          $table->tinyInteger('bo_use_file_content', 4);
          $table->tinyInteger('bo_use_secret', 4);
          $table->tinyInteger('bo_use_dhtml_editor', 4);
          $table->tinyInteger('bo_use_rss_view', 4);
          $table->tinyInteger('bo_use_good', 4);
          $table->tinyInteger('bo_use_nogood', 4);
          $table->tinyInteger('bo_use_name', 4);
          $table->tinyInteger('bo_use_signature', 4);
          $table->tinyInteger('bo_use_ip_view', 4);
          $table->tinyInteger('bo_use_list_view', 4);
          $table->tinyInteger('bo_use_list_file', 4);
          $table->tinyInteger('bo_use_list_content', 4);
          $table->integer('bo_table_width', 11);
          $table->integer('bo_subject_len', 11);
          $table->integer('bo_mobile_subject_len', 11);
          $table->integer('bo_page_rows', 11);
          $table->integer('bo_mobile_page_rows', 11);
          $table->integer('bo_new', 11);
          $table->integer('bo_hot', 11);
          $table->integer('bo_image_width', 11);
          $table->string('bo_skin', 255);
          $table->string('bo_mobile_skin', 255);
          $table->string('bo_include_head', 255);
          $table->string('bo_include_tail', 255);
          $table->text('bo_content_head');
          $table->text('bo_mobile_content_head');
          $table->text('bo_content_tail');
          $table->text('bo_mobile_content_tail');
          $table->text('bo_insert_content');
          $table->integer('bo_gallery_cols', 11);
          $table->integer('bo_gallery_width', 11);
          $table->integer('bo_gallery_height', 11);
          $table->integer('bo_mobile_gallery_width', 11);
          $table->integer('bo_mobile_gallery_height', 11);
          $table->integer('bo_upload_size', 11);
          $table->tinyInteger('bo_reply_order', 4);
          $table->tinyInteger('bo_use_search', 4);
          $table->integer('bo_order', 11);
          $table->integer('bo_count_write', 11);
          $table->integer('bo_count_comment', 11);
          $table->integer('bo_write_min', 11);
          $table->integer('bo_write_max', 11);
          $table->integer('bo_comment_min', 11);
          $table->integer('bo_comment_max', 11);
          $table->text('bo_notice');
          $table->tinyInteger('bo_upload_count', 4);
          $table->tinyInteger('bo_use_email', 4);
          $table->enum('bo_use_cert', ['', 'cert', 'adult', 'hp-cert', 'hp-adult']);
          $table->tinyInteger('bo_use_sns', 4);
          $table->string('bo_sort_field', 255);
          $table->string('bo_1_subj', 255);
          $table->string('bo_2_subj', 255);
          $table->string('bo_3_subj', 255);
          $table->string('bo_4_subj', 255);
          $table->string('bo_5_subj', 255);
          $table->string('bo_6_subj', 255);
          $table->string('bo_7_subj', 255);
          $table->string('bo_8_subj', 255);
          $table->string('bo_9_subj', 255);
          $table->string('bo_10_subj', 255);
          $table->string('bo_1', 255);
          $table->string('bo_2', 255);
          $table->string('bo_3', 255);
          $table->string('bo_4', 255);
          $table->string('bo_5', 255);
          $table->string('bo_6', 255);
          $table->string('bo_7', 255);
          $table->string('bo_8', 255);
          $table->string('bo_9', 255);
          $table->string('bo_10', 255);

          $table->primary('bo_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_board');
    }
}
