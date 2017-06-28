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
          $table->tinyInteger('bo_list_level');
          $table->tinyInteger('bo_read_level');
          $table->tinyInteger('bo_write_level');
          $table->tinyInteger('bo_reply_level');
          $table->tinyInteger('bo_comment_level');
          $table->tinyInteger('bo_upload_level');
          $table->tinyInteger('bo_download_level');
          $table->tinyInteger('bo_html_level');
          $table->tinyInteger('bo_link_level');
          $table->tinyInteger('bo_count_delete');
          $table->tinyInteger('bo_count_modify');
          $table->integer('bo_read_point');
          $table->integer('bo_write_point');
          $table->integer('bo_comment_point');
          $table->integer('bo_download_point');
          $table->tinyInteger('bo_use_category');
          $table->text('bo_category_list');
          $table->tinyInteger('bo_use_sideview');
          $table->tinyInteger('bo_use_file_content');
          $table->tinyInteger('bo_use_secret');
          $table->tinyInteger('bo_use_dhtml_editor');
          $table->tinyInteger('bo_use_rss_view');
          $table->tinyInteger('bo_use_good');
          $table->tinyInteger('bo_use_nogood');
          $table->tinyInteger('bo_use_name');
          $table->tinyInteger('bo_use_signature');
          $table->tinyInteger('bo_use_ip_view');
          $table->tinyInteger('bo_use_list_view');
          $table->tinyInteger('bo_use_list_file');
          $table->tinyInteger('bo_use_list_content');
          $table->integer('bo_table_width');
          $table->integer('bo_subject_len');
          $table->integer('bo_mobile_subject_len');
          $table->integer('bo_page_rows');
          $table->integer('bo_mobile_page_rows');
          $table->integer('bo_new');
          $table->integer('bo_hot');
          $table->integer('bo_image_width');
          $table->string('bo_skin', 255);
          $table->string('bo_mobile_skin', 255);
          $table->string('bo_include_head', 255);
          $table->string('bo_include_tail', 255);
          $table->text('bo_content_head');
          $table->text('bo_mobile_content_head');
          $table->text('bo_content_tail');
          $table->text('bo_mobile_content_tail');
          $table->text('bo_insert_content');
          $table->integer('bo_gallery_cols');
          $table->integer('bo_gallery_width');
          $table->integer('bo_gallery_height');
          $table->integer('bo_mobile_gallery_width');
          $table->integer('bo_mobile_gallery_height');
          $table->integer('bo_upload_size');
          $table->tinyInteger('bo_reply_order');
          $table->tinyInteger('bo_use_search');
          $table->integer('bo_order');
          $table->integer('bo_count_write');
          $table->integer('bo_count_comment');
          $table->integer('bo_write_min');
          $table->integer('bo_write_max');
          $table->integer('bo_comment_min');
          $table->integer('bo_comment_max');
          $table->text('bo_notice');
          $table->tinyInteger('bo_upload_count');
          $table->tinyInteger('bo_use_email');
          $table->enum('bo_use_cert', ['', 'cert', 'adult', 'hp-cert', 'hp-adult']);
          $table->tinyInteger('bo_use_sns');
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
