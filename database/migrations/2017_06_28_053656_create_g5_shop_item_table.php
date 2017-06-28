<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_item', function(Blueprint $table){
          $table->string('it_id', 20);
          $table->string('ca_id', 20);
          $table->string('ca_id2', 255);
          $table->string('ca_id3', 255);
          $table->string('it_skin', 255);
          $table->string('it_mobile_skin', 255);
          $table->string('it_name', 255);
          $table->string('it_maker', 255);
          $table->string('it_origin', 255);
          $table->string('it_brand', 255);
          $table->string('it_model', 255);
          $table->string('it_option_subject', 255);
          $table->string('it_supply_subject', 255);
          $table->tinyInteger('it_type1', 4);
          $table->tinyInteger('it_type2', 4);
          $table->tinyInteger('it_type3', 4);
          $table->tinyInteger('it_type4', 4);
          $table->tinyInteger('it_type5', 4);
          $table->text('it_basic');
          $table->mediumText('it_explan');
          $table->mediumText('it_explan2');
          $table->mediumText('it_mobile_explan');
          $table->integer('it_cust_price', 11);
          $table->integer('it_price', 11);
          $table->integer('it_point', 11);
          $table->tinyInteger('it_point_type', 4);
          $table->integer('it_supply_point', 11);
          $table->tinyInteger('it_notax', 4);
          $table->string('it_sell_email', 255);
          $table->tinyInteger('it_use', 4);
          $table->tinyInteger('it_nocoupon', 4);
          $table->tinyInteger('it_soldout', 4);
          $table->integer('it_stock_qty', 11);
          $table->tinyInteger('it_sc_type', 4);
          $table->tinyInteger('it_sc_method', 4);
          $table->integer('it_sc_price', 11);
          $table->integer('it_sc_minimum', 11);
          $table->integer('it_sc_qty', 11);
          $table->integer('it_buy_min_qty', 11);
          $table->integer('it_buy_max_qty', 11);
          $table->text('it_head_html');
          $table->text('it_tail_html');
          $table->text('it_mobile_head_html');
          $table->text('it_mobile_tail_html');
          $table->integer('it_hit', 11);
          $table->dateTime('it_time');
          $table->dateTime('it_update_time');
          $table->string('it_ip', 25);
          $table->integer('it_order', 11);
          $table->tinyInteger('it_tel_inq', 4);
          $table->string('it_info_gubun', 50);
          $table->text('it_info_value');
          $table->integer('it_sum_qty', 11);
          $table->integer('it_use_cnt', 11);
          $table->decimal('it_use_avg', 2, 1);
          $table->text('it_shop_memo');
          $table->string('ec_mall_pid', 255);
          $table->string('it_img1', 255);
          $table->string('it_img2', 255);
          $table->string('it_img3', 255);
          $table->string('it_img4', 255);
          $table->string('it_img5', 255);
          $table->string('it_img6', 255);
          $table->string('it_img7', 255);
          $table->string('it_img8', 255);
          $table->string('it_img9', 255);
          $table->string('it_img10', 255);
          $table->string('it_1_subj', 255);
          $table->string('it_2_subj', 255);
          $table->string('it_3_subj', 255);
          $table->string('it_4_subj', 255);
          $table->string('it_5_subj', 255);
          $table->string('it_6_subj', 255);
          $table->string('it_7_subj', 255);
          $table->string('it_8_subj', 255);
          $table->string('it_9_subj', 255);
          $table->string('it_10_subj', 255);
          $table->string('it_1', 255);
          $table->string('it_2', 255);
          $table->string('it_3', 255);
          $table->string('it_4', 255);
          $table->string('it_5', 255);
          $table->string('it_6', 255);
          $table->string('it_7', 255);
          $table->string('it_8', 255);
          $table->string('it_9', 255);
          $table->string('it_10', 255);

          $table->primary('it_id');
          $table->index('ca_id');
          $table->index('it_name');
          $table->index('it_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_item');
    }
}
