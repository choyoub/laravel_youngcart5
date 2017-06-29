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
          $table->string('bo_mobile_subject', 255)->nullable();
          $table->enum('bo_device', ['both', 'pc', 'mobile'])->default('both');
          $table->string('bo_admin', 255);
          $table->tinyInteger('bo_list_level')->nullable();
          $table->tinyInteger('bo_read_level')->nullable();
          $table->tinyInteger('bo_write_level')->nullable();
          $table->tinyInteger('bo_reply_level')->nullable();
          $table->tinyInteger('bo_comment_level')->nullable();
          $table->tinyInteger('bo_upload_level')->nullable();
          $table->tinyInteger('bo_download_level')->nullable();
          $table->tinyInteger('bo_html_level')->nullable();
          $table->tinyInteger('bo_link_level')->nullable();
          $table->tinyInteger('bo_count_delete')->nullable();
          $table->tinyInteger('bo_count_modify')->nullable();
          $table->integer('bo_read_point')->nullable();
          $table->integer('bo_write_point')->nullable();
          $table->integer('bo_comment_point')->nullable();
          $table->integer('bo_download_point')->nullable();
          $table->tinyInteger('bo_use_category')->nullable();
          $table->text('bo_category_list')->nullable();
          $table->tinyInteger('bo_use_sideview')->nullable();
          $table->tinyInteger('bo_use_file_content')->nullable();
          $table->tinyInteger('bo_use_secret')->nullable();
          $table->tinyInteger('bo_use_dhtml_editor')->nullable();
          $table->tinyInteger('bo_use_rss_view')->nullable();
          $table->tinyInteger('bo_use_good')->nullable();
          $table->tinyInteger('bo_use_nogood')->nullable();
          $table->tinyInteger('bo_use_name')->nullable();
          $table->tinyInteger('bo_use_signature')->nullable();
          $table->tinyInteger('bo_use_ip_view')->nullable();
          $table->tinyInteger('bo_use_list_view')->nullable();
          $table->tinyInteger('bo_use_list_file')->nullable();
          $table->tinyInteger('bo_use_list_content')->nullable();
          $table->integer('bo_table_width')->nullable();
          $table->integer('bo_subject_len')->nullable();
          $table->integer('bo_mobile_subject_len')->nullable();
          $table->integer('bo_page_rows')->nullable();
          $table->integer('bo_mobile_page_rows')->nullable();
          $table->integer('bo_new')->nullable();
          $table->integer('bo_hot')->nullable();
          $table->integer('bo_image_width')->nullable();
          $table->string('bo_skin', 255)->nullable();
          $table->string('bo_mobile_skin', 255)->nullable();
          $table->string('bo_include_head', 255)->nullable();
          $table->string('bo_include_tail', 255)->nullable();
          $table->text('bo_content_head')->nullable();
          $table->text('bo_mobile_content_head')->nullable();
          $table->text('bo_content_tail')->nullable();
          $table->text('bo_mobile_content_tail')->nullable();
          $table->text('bo_insert_content')->nullable();
          $table->integer('bo_gallery_cols')->nullable();
          $table->integer('bo_gallery_width')->nullable();
          $table->integer('bo_gallery_height')->nullable();
          $table->integer('bo_mobile_gallery_width')->nullable();
          $table->integer('bo_mobile_gallery_height')->nullable();
          $table->integer('bo_upload_size')->nullable();
          $table->tinyInteger('bo_reply_order')->nullable();
          $table->tinyInteger('bo_use_search')->nullable();
          $table->integer('bo_order')->nullable();
          $table->integer('bo_count_write')->nullable();
          $table->integer('bo_count_comment')->nullable();
          $table->integer('bo_write_min')->nullable();
          $table->integer('bo_write_max')->nullable();
          $table->integer('bo_comment_min')->nullable();
          $table->integer('bo_comment_max')->nullable();
          $table->text('bo_notice')->nullable();
          $table->tinyInteger('bo_upload_count')->nullable();
          $table->tinyInteger('bo_use_email')->nullable();
          $table->enum('bo_use_cert', ['', 'cert', 'adult', 'hp-cert', 'hp-adult'])->nullable();
          $table->tinyInteger('bo_use_sns')->nullable();
          $table->string('bo_sort_field', 255)->nullable();
          $table->string('bo_1_subj', 255)->nullable();
          $table->string('bo_2_subj', 255)->nullable();
          $table->string('bo_3_subj', 255)->nullable();
          $table->string('bo_4_subj', 255)->nullable();
          $table->string('bo_5_subj', 255)->nullable();
          $table->string('bo_6_subj', 255)->nullable();
          $table->string('bo_7_subj', 255)->nullable();
          $table->string('bo_8_subj', 255)->nullable();
          $table->string('bo_9_subj', 255)->nullable();
          $table->string('bo_10_subj', 255)->nullable();
          $table->string('bo_1', 255)->nullable();
          $table->string('bo_2', 255)->nullable();
          $table->string('bo_3', 255)->nullable();
          $table->string('bo_4', 255)->nullable();
          $table->string('bo_5', 255)->nullable();
          $table->string('bo_6', 255)->nullable();
          $table->string('bo_7', 255)->nullable();
          $table->string('bo_8', 255)->nullable();
          $table->string('bo_9', 255)->nullable();
          $table->string('bo_10', 255)->nullable();

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
