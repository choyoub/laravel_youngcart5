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
          $table->text('cf_add_script');
          $table->tinyInteger('cf_use_point', 4);
          $table->integer('cf_point_term', 11);
          $table->tinyInteger('cf_use_copy_log', 4);
          $table->tinyInteger('cf_use_email_certify', 4);
          $table->integer('cf_login_point', 11);
          $table->tinyInteger('cf_cut_name', 4);
          $table->integer('cf_nick_modify', 11);
          $table->string('cf_new_skin', 255);
          $table->integer('cf_new_rows', 11);
          $table->string('cf_search_skin', 255);
          $table->string('cf_connect_skin', 255);
          $table->string('cf_faq_skin', 255);
          $table->integer('cf_read_point', 11);
          $table->integer('cf_write_point', 11);
          $table->integer('cf_comment_point', 11);
          $table->integer('cf_download_point', 11);
          $table->integer('cf_write_pages', 11);
          $table->integer('cf_mobile_pages', 11);
          $table->string('cf_link_target', 255);
          $table->integer('cf_delay_sec', 11);
          $table->text('cf_filter');
          $table->text('cf_possible_ip');
          $table->text('cf_intercept_ip');
          $table->text('cf_analytics');
          $table->text('cf_add_meta');
          $table->string('cf_member_skin', 255);
          $table->tinyInteger('cf_use_homepage', 4);
          $table->tinyInteger('cf_req_homepage', 4);
          $table->tinyInteger('cf_req_tel', 4);
          $table->tinyInteger('cf_use_hp', 4);
          $table->tinyInteger('cf_req_hp', 4);
          $table->tinyInteger('cf_use_addr', 4);
          $table->tinyInteger('cf_req_addr', 4);
          $table->tinyInteger('cf_use_signature', 4);
          $table->tinyInteger('cf_req_signature', 4);
          $table->tinyInteger('cf_use_profile', 4);
          $table->tinyInteger('cf_req_profile', 4);
          $table->tinyInteger('cf_register_level', 4);
          $table->integer('cf_register_point', 11);
          $table->tinyInteger('cf_icon_level', 4);
          $table->tinyInteger('cf_use_recommend', 4);
          $table->integer('cf_recommend_point', 11);
          $table->integer('cf_leave_day', 11);
          $table->integer('cf_search_part', 11);
          $table->tinyInteger('cf_email_use', 4);
          $table->tinyInteger('cf_email_wr_super_admin', 4);
          $table->tinyInteger('cf_email_wr_group_admin', 4);
          $table->tinyInteger('cf_email_wr_board_admin', 4);
          $table->tinyInteger('cf_email_wr_write', 4);
          $table->tinyInteger('cf_email_wr_comment_all', 4);
          $table->tinyInteger('cf_email_mb_super_admin', 4);
          $table->tinyInteger('cf_email_mb_member', 4);
          $table->tinyInteger('cf_email_po_super_admin', 4);
          $table->text('cf_prohibit_id');
          $table->text('cf_prohibit_email');
          $table->integer('cf_new_del', 11);
          $table->integer('cf_memo_del', 11);
          $table->integer('cf_visit_del', 11);
          $table->integer('cf_popular_del', 11);
          $table->dateTime('cf_optimize_date');
          $table->tinyInteger('cf_use_member_icon', 4);
          $table->integer('cf_member_icon_size', 11);
          $table->integer('cf_member_icon_width', 11);
          $table->integer('cf_member_icon_height', 11);
          $table->integer('cf_login_minutes', 11);
          $table->string('cf_image_extension', 255);
          $table->string('cf_flash_extension', 255);
          $table->string('cf_movie_extension', 255);
          $table->tinyInteger('cf_formmail_is_member', 4);
          $table->integer('cf_page_rows', 11);
          $table->integer('cf_mobile_page_rows', 11);
          $table->string('cf_visit', 255);
          $table->integer('cf_max_po_id', 11);
          $table->text('cf_stipulation');
          $table->text('cf_privacy');
          $table->integer('cf_open_modify', 11);
          $table->integer('cf_memo_send_point', 11);
          $table->string('cf_mobile_new_skin', 255);
          $table->string('cf_mobile_search_skin', 255);
          $table->string('cf_mobile_connect_skin', 255);
          $table->string('cf_mobile_faq_skin', 255);
          $table->string('cf_mobile_member_skin', 255);
          $table->string('cf_captcha_mp3', 255);
          $table->string('cf_editor', 255);
          $table->tinyInteger('cf_cert_use', 4);
          $table->string('cf_cert_ipin', 255);
          $table->string('cf_cert_hp', 255);
          $table->string('cf_cert_kcb_cd', 255);
          $table->string('cf_cert_kcp_cd', 255);
          $table->string('cf_lg_mid', 255);
          $table->string('cf_lg_mert_key', 255);
          $table->integer('cf_cert_limit', 11);
          $table->tinyInteger('cf_cert_req', 4);
          $table->string('cf_sms_use', 255);
          $table->string('cf_sms_type', 10);
          $table->string('cf_icode_id', 255);
          $table->string('cf_icode_pw', 255);
          $table->string('cf_icode_server_ip', 255);
          $table->string('cf_icode_server_port', 255);
          $table->string('cf_googl_shorturl_apikey', 255);
          $table->string('cf_facebook_appid', 255);
          $table->string('cf_facebook_secret', 255);
          $table->string('cf_twitter_key', 255);
          $table->string('cf_twitter_secret', 255);
          $table->string('cf_kakao_js_apikey', 255);
          $table->string('cf_1_subj', 255);
          $table->string('cf_2_subj', 255);
          $table->string('cf_3_subj', 255);
          $table->string('cf_4_subj', 255);
          $table->string('cf_5_subj', 255);
          $table->string('cf_6_subj', 255);
          $table->string('cf_7_subj', 255);
          $table->string('cf_8_subj', 255);
          $table->string('cf_9_subj', 255);
          $table->string('cf_10_subj', 255);
          $table->string('cf_1', 255);
          $table->string('cf_2', 255);
          $table->string('cf_3', 255);
          $table->string('cf_4', 255);
          $table->string('cf_5', 255);
          $table->string('cf_6', 255);
          $table->string('cf_7', 255);
          $table->string('cf_8', 255);
          $table->string('cf_9', 255);
          $table->string('cf_10', 255);
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
