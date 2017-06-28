<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopDefaultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_default', function(Blueprint $table){
          $table->string('de_admin_company_owner', 255);
          $table->string('de_admin_company_name', 255);
          $table->string('de_admin_company_saupja_no', 255);
          $table->string('de_admin_company_tel', 255);
          $table->string('de_admin_company_fax', 255);
          $table->string('de_admin_tongsin_no', 255);
          $table->string('de_admin_company_zip', 255);
          $table->string('de_admin_company_addr', 255);
          $table->string('de_admin_info_name', 255);
          $table->string('de_admin_info_email', 255);
          $table->string('de_shop_skin', 255);
          $table->string('de_shop_mobile_skin', 255);
          $table->tinyInteger('de_type1_list_use');
          $table->string('de_type1_list_skin', 255);
          $table->integer('de_type1_list_mod');
          $table->integer('de_type1_list_row');
          $table->integer('de_type1_img_width');
          $table->integer('de_type1_img_height');
          $table->tinyInteger('de_type2_list_use');
          $table->string('de_type2_list_skin', 255);
          $table->integer('de_type2_list_mod');
          $table->integer('de_type2_list_row');
          $table->integer('de_type2_img_width');
          $table->integer('de_type2_img_height');
          $table->tinyInteger('de_type3_list_use');
          $table->string('de_type3_list_skin', 255);
          $table->integer('de_type3_list_mod');
          $table->integer('de_type3_list_row');
          $table->integer('de_type3_img_width');
          $table->integer('de_type3_img_height');
          $table->tinyInteger('de_type4_list_use');
          $table->string('de_type4_list_skin', 255);
          $table->integer('de_type4_list_mod');
          $table->integer('de_type4_list_row');
          $table->integer('de_type4_img_width');
          $table->integer('de_type4_img_height');
          $table->tinyInteger('de_type5_list_use');
          $table->string('de_type5_list_skin', 255);
          $table->integer('de_type5_list_mod');
          $table->integer('de_type5_list_row');
          $table->integer('de_type5_img_width');
          $table->integer('de_type5_img_height');
          $table->tinyInteger('de_mobile_type1_list_use');
          $table->string('de_mobile_type1_list_skin', 255);
          $table->integer('de_mobile_type1_list_mod');
          $table->integer('de_mobile_type1_list_row');
          $table->integer('de_mobile_type1_img_width');
          $table->integer('de_mobile_type1_img_height');
          $table->tinyInteger('de_mobile_type2_list_use');
          $table->string('de_mobile_type2_list_skin', 255);
          $table->integer('de_mobile_type2_list_mod');
          $table->integer('de_mobile_type2_list_row');
          $table->integer('de_mobile_type2_img_width');
          $table->integer('de_mobile_type2_img_height');
          $table->string('de_mobile_type3_list_skin', 255);
          $table->integer('de_mobile_type3_list_mod');
          $table->integer('de_mobile_type3_list_row');
          $table->integer('de_mobile_type3_img_width');
          $table->integer('de_mobile_type3_img_height');
          $table->tinyInteger('de_mobile_type4_list_use');
          $table->string('de_mobile_type4_list_skin', 255);
          $table->integer('de_mobile_type4_list_mod');
          $table->integer('de_mobile_type4_list_row');
          $table->integer('de_mobile_type4_img_width');
          $table->integer('de_mobile_type4_img_height');
          $table->tinyInteger('de_mobile_type5_list_use');
          $table->string('de_mobile_type5_list_skin', 255);
          $table->integer('de_mobile_type5_list_mod');
          $table->integer('de_mobile_type5_list_row');
          $table->integer('de_mobile_type5_img_width');
          $table->integer('de_mobile_type5_img_height');
          $table->tinyInteger('de_rel_list_use');
          $table->string('de_rel_list_skin', 255);
          $table->integer('de_rel_list_mod');
          $table->integer('de_rel_img_width');
          $table->integer('de_rel_img_height');
          $table->tinyInteger('de_mobile_rel_list_use');
          $table->string('de_mobile_rel_list_skin', 255);
          $table->integer('de_mobile_rel_list_mod');
          $table->integer('de_mobile_rel_img_width');
          $table->integer('de_mobile_rel_img_height');
          $table->string('de_search_list_skin', 255);
          $table->integer('de_search_list_mod');
          $table->integer('de_search_list_row');
          $table->integer('de_search_img_width');
          $table->integer('de_search_img_height');
          $table->string('de_mobile_search_list_skin', 255);
          $table->integer('de_mobile_search_list_mod');
          $table->integer('de_mobile_search_list_row');
          $table->integer('de_mobile_search_img_width');
          $table->integer('de_mobile_search_img_height');
          $table->string('de_listtype_list_skin', 255);
          $table->integer('de_listtype_list_mod');
          $table->integer('de_listtype_list_row');
          $table->integer('de_listtype_img_width');
          $table->integer('de_listtype_img_height');
          $table->string('de_mobile_listtype_list_skin', 255);
          $table->integer('de_mobile_listtype_list_mod');
          $table->integer('de_mobile_listtype_list_row');
          $table->integer('de_mobile_listtype_img_width');
          $table->integer('de_mobile_listtype_img_height');
          $table->integer('de_bank_use');
          $table->text('de_bank_account');
          $table->integer('de_card_test');
          $table->integer('de_card_use');
          $table->tinyInteger('de_card_noint_use');
          $table->integer('de_card_point');
          $table->integer('de_settle_min_point');
          $table->integer('de_settle_max_point');
          $table->integer('de_settle_point_unit');
          $table->integer('de_level_sell');
          $table->string('de_delivery_company', 255);
          $table->string('de_send_cost_case', 255);
          $table->string('de_send_cost_limit', 255);
          $table->string('de_send_cost_list', 255);
          $table->integer('de_hope_date_use');
          $table->integer('de_hope_date_after');
          $table->text('de_baesong_content');
          $table->text('de_change_content');
          $table->integer('de_point_days');
          $table->integer('de_simg_width');
          $table->integer('de_simg_height');
          $table->integer('de_mimg_width');
          $table->integer('de_mimg_height');
          $table->string('de_sms_cont1', 255);
          $table->string('de_sms_cont2', 255);
          $table->string('de_sms_cont3', 255);
          $table->string('de_sms_cont4', 255);
          $table->string('de_sms_cont5', 255);
          $table->tinyInteger('de_sms_use1');
          $table->tinyInteger('de_sms_use2');
          $table->tinyInteger('de_sms_use3');
          $table->tinyInteger('de_sms_use4');
          $table->tinyInteger('de_sms_use5');
          $table->string('de_sms_hp', 255);
          $table->string('de_pg_service', 255);
          $table->string('de_kcp_mid', 255);
          $table->string('de_kcp_site_key', 255);
          $table->string('de_inicis_mid', 255);
          $table->string('de_inicis_admin_key', 255);
          $table->string('de_inicis_sign_key', 255);
          $table->tinyInteger('de_iche_use');
          $table->tinyInteger('de_easy_pay_use');
          $table->tinyInteger('de_samsung_pay_use');
          $table->tinyInteger('de_item_use_use');
          $table->tinyInteger('de_item_use_write');
          $table->tinyInteger('de_code_dup_use');
          $table->integer('de_cart_keep_term');
          $table->tinyInteger('de_guest_cart_use');
          $table->string('de_admin_buga_no', 255);
          $table->string('de_vbank_use', 255);
          $table->tinyInteger('de_taxsave_use');
          $table->text('de_guest_privacy');
          $table->tinyInteger('de_hp_use');
          $table->tinyInteger('de_escrow_use');
          $table->tinyInteger('de_tax_flag_use');
          $table->string('de_kakaopay_mid', 255);
          $table->string('de_kakaopay_key', 255);
          $table->string('de_kakaopay_enckey', 255);
          $table->string('de_kakaopay_hashkey', 255);
          $table->string('de_kakaopay_cancelpwd', 255);
          $table->string('de_naverpay_mid', 255);
          $table->string('de_naverpay_cert_key', 255);
          $table->string('de_naverpay_button_key', 255);
          $table->tinyInteger('de_naverpay_test');
          $table->string('de_naverpay_mb_id', 255);
          $table->string('de_naverpay_sendcost', 255);
          $table->tinyInteger('de_member_reg_coupon_use');
          $table->integer('de_member_reg_coupon_term');
          $table->integer('de_member_reg_coupon_price');
          $table->integer('de_member_reg_coupon_minimum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_default');
    }
}
