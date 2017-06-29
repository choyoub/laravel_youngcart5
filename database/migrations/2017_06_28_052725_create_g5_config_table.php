<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_config', function(Blueprint $table){
          $table->string('cf_title', 255);
          $table->string('cf_theme', 255);
          $table->string('cf_admin', 255);
          $table->string('cf_admin_email', 255);
          $table->string('cf_admin_email_name', 255);
          $table->text('cf_add_script')->nullable();
          $table->tinyInteger('cf_use_point')->nullable();
          $table->integer('cf_point_term')->nullable();
          $table->tinyInteger('cf_use_copy_log')->nullable();
          $table->tinyInteger('cf_use_email_certify')->nullable();
          $table->integer('cf_login_point')->nullable();
          $table->tinyInteger('cf_cut_name')->nullable();
          $table->integer('cf_nick_modify')->nullable();
          $table->string('cf_new_skin', 255)->nullable();
          $table->integer('cf_new_rows')->nullable();
          $table->string('cf_search_skin', 255)->nullable();
          $table->string('cf_connect_skin', 255)->nullable();
          $table->string('cf_faq_skin', 255)->nullable();
          $table->integer('cf_read_point')->nullable();
          $table->integer('cf_write_point')->nullable();
          $table->integer('cf_comment_point')->nullable();
          $table->integer('cf_download_point')->nullable();
          $table->integer('cf_write_pages')->nullable();
          $table->integer('cf_mobile_pages')->nullable();
          $table->string('cf_link_target', 255)->nullable();
          $table->integer('cf_delay_sec')->nullable();
          $table->text('cf_filter')->nullable();
          $table->text('cf_possible_ip')->nullable();
          $table->text('cf_intercept_ip')->nullable();
          $table->text('cf_analytics')->nullable();
          $table->text('cf_add_meta')->nullable();
          $table->string('cf_member_skin', 255)->nullable();
          $table->tinyInteger('cf_use_homepage')->nullable();
          $table->tinyInteger('cf_req_homepage')->nullable();
          $table->tinyInteger('cf_req_tel')->nullable();
          $table->tinyInteger('cf_use_hp')->nullable();
          $table->tinyInteger('cf_req_hp')->nullable();
          $table->tinyInteger('cf_use_addr')->nullable();
          $table->tinyInteger('cf_req_addr')->nullable();
          $table->tinyInteger('cf_use_signature')->nullable();
          $table->tinyInteger('cf_req_signature')->nullable();
          $table->tinyInteger('cf_use_profile')->nullable();
          $table->tinyInteger('cf_req_profile')->nullable();
          $table->tinyInteger('cf_register_level')->nullable();
          $table->integer('cf_register_point')->nullable();
          $table->tinyInteger('cf_icon_level')->nullable();
          $table->tinyInteger('cf_use_recommend')->nullable();
          $table->integer('cf_recommend_point')->nullable();
          $table->integer('cf_leave_day')->nullable();
          $table->integer('cf_search_part')->nullable();
          $table->tinyInteger('cf_email_use')->nullable();
          $table->tinyInteger('cf_email_wr_super_admin')->nullable();
          $table->tinyInteger('cf_email_wr_group_admin')->nullable();
          $table->tinyInteger('cf_email_wr_board_admin')->nullable();
          $table->tinyInteger('cf_email_wr_write')->nullable();
          $table->tinyInteger('cf_email_wr_comment_all')->nullable();
          $table->tinyInteger('cf_email_mb_super_admin')->nullable();
          $table->tinyInteger('cf_email_mb_member')->nullable();
          $table->tinyInteger('cf_email_po_super_admin')->nullable();
          $table->text('cf_prohibit_id')->nullable();
          $table->text('cf_prohibit_email')->nullable();
          $table->integer('cf_new_del')->nullable();
          $table->integer('cf_memo_del')->nullable();
          $table->integer('cf_visit_del')->nullable();
          $table->integer('cf_popular_del')->nullable();
          $table->dateTime('cf_optimize_date')->nullable();
          $table->tinyInteger('cf_use_member_icon')->nullable();
          $table->integer('cf_member_icon_size')->nullable();
          $table->integer('cf_member_icon_width')->nullable();
          $table->integer('cf_member_icon_height')->nullable();
          $table->integer('cf_login_minutes')->nullable();
          $table->string('cf_image_extension', 255)->nullable();
          $table->string('cf_flash_extension', 255)->nullable();
          $table->string('cf_movie_extension', 255)->nullable();
          $table->tinyInteger('cf_formmail_is_member')->nullable();
          $table->integer('cf_page_rows')->nullable();
          $table->integer('cf_mobile_page_rows')->nullable();
          $table->string('cf_visit', 255)->nullable();
          $table->integer('cf_max_po_id')->nullable();
          $table->text('cf_stipulation')->nullable();
          $table->text('cf_privacy')->nullable();
          $table->integer('cf_open_modify')->nullable();
          $table->integer('cf_memo_send_point')->nullable();
          $table->string('cf_mobile_new_skin', 255)->nullable();
          $table->string('cf_mobile_search_skin', 255)->nullable();
          $table->string('cf_mobile_connect_skin', 255)->nullable();
          $table->string('cf_mobile_faq_skin', 255)->nullable();
          $table->string('cf_mobile_member_skin', 255)->nullable();
          $table->string('cf_captcha_mp3', 255)->nullable();
          $table->string('cf_editor', 255)->nullable();
          $table->tinyInteger('cf_cert_use')->nullable();
          $table->string('cf_cert_ipin', 255)->nullable();
          $table->string('cf_cert_hp', 255)->nullable();
          $table->string('cf_cert_kcb_cd', 255)->nullable();
          $table->string('cf_cert_kcp_cd', 255)->nullable();
          $table->string('cf_lg_mid', 255)->nullable();
          $table->string('cf_lg_mert_key', 255)->nullable();
          $table->integer('cf_cert_limit')->nullable();
          $table->tinyInteger('cf_cert_req')->nullable();
          $table->string('cf_sms_use', 255)->nullable();
          $table->string('cf_sms_type', 10)->nullable();
          $table->string('cf_icode_id', 255)->nullable();
          $table->string('cf_icode_pw', 255)->nullable();
          $table->string('cf_icode_server_ip', 255)->nullable();
          $table->string('cf_icode_server_port', 255)->nullable();
          $table->string('cf_googl_shorturl_apikey', 255)->nullable();
          $table->string('cf_facebook_appid', 255)->nullable();
          $table->string('cf_facebook_secret', 255)->nullable();
          $table->string('cf_twitter_key', 255)->nullable();
          $table->string('cf_twitter_secret', 255)->nullable();
          $table->string('cf_kakao_js_apikey', 255)->nullable();
          $table->string('cf_1_subj', 255)->nullable();
          $table->string('cf_2_subj', 255)->nullable();
          $table->string('cf_3_subj', 255)->nullable();
          $table->string('cf_4_subj', 255)->nullable();
          $table->string('cf_5_subj', 255)->nullable();
          $table->string('cf_6_subj', 255)->nullable();
          $table->string('cf_7_subj', 255)->nullable();
          $table->string('cf_8_subj', 255)->nullable();
          $table->string('cf_9_subj', 255)->nullable();
          $table->string('cf_10_subj', 255)->nullable();
          $table->string('cf_1', 255)->nullable();
          $table->string('cf_2', 255)->nullable();
          $table->string('cf_3', 255)->nullable();
          $table->string('cf_4', 255)->nullable();
          $table->string('cf_5', 255)->nullable();
          $table->string('cf_6', 255)->nullable();
          $table->string('cf_7', 255)->nullable();
          $table->string('cf_8', 255)->nullable();
          $table->string('cf_9', 255)->nullable();
          $table->string('cf_10', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_config');
    }
}
