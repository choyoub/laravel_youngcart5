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
          $table->string('ca_id2', 255)->nullable();
          $table->string('ca_id3', 255)->nullable();
          $table->string('it_skin', 255)->nullable();
          $table->string('it_mobile_skin', 255)->nullable();
          $table->string('it_name', 255)->nullable();
          $table->string('it_maker', 255)->nullable();
          $table->string('it_origin', 255)->nullable();
          $table->string('it_brand', 255)->nullable();
          $table->string('it_model', 255)->nullable();
          $table->string('it_option_subject', 255)->nullable();
          $table->string('it_supply_subject', 255)->nullable();
          $table->tinyInteger('it_type1')->nullable();
          $table->tinyInteger('it_type2')->nullable();
          $table->tinyInteger('it_type3')->nullable();
          $table->tinyInteger('it_type4')->nullable();
          $table->tinyInteger('it_type5')->nullable();
          $table->text('it_basic')->nullable();
          $table->mediumText('it_explan')->nullable();
          $table->mediumText('it_explan2')->nullable();
          $table->mediumText('it_mobile_explan')->nullable();
          $table->integer('it_cust_price')->nullable();
          $table->integer('it_price')->nullable();
          $table->integer('it_point')->nullable();
          $table->tinyInteger('it_point_type')->nullable();
          $table->integer('it_supply_point')->nullable();
          $table->tinyInteger('it_notax')->nullable();
          $table->string('it_sell_email', 255)->nullable();
          $table->tinyInteger('it_use')->nullable();
          $table->tinyInteger('it_nocoupon')->nullable();
          $table->tinyInteger('it_soldout')->nullable();
          $table->integer('it_stock_qty')->nullable();
          $table->tinyInteger('it_sc_type')->nullable();
          $table->tinyInteger('it_sc_method')->nullable();
          $table->integer('it_sc_price')->nullable();
          $table->integer('it_sc_minimum')->nullable();
          $table->integer('it_sc_qty')->nullable();
          $table->integer('it_buy_min_qty')->nullable();
          $table->integer('it_buy_max_qty')->nullable();
          $table->text('it_head_html')->nullable();
          $table->text('it_tail_html')->nullable();
          $table->text('it_mobile_head_html')->nullable();
          $table->text('it_mobile_tail_html')->nullable();
          $table->integer('it_hit')->nullable();
          $table->dateTime('it_time')->nullable();
          $table->dateTime('it_update_time')->nullable();
          $table->string('it_ip', 25)->nullable();
          $table->integer('it_order')->nullable();
          $table->tinyInteger('it_tel_inq')->nullable();
          $table->string('it_info_gubun', 50)->nullable();
          $table->text('it_info_value')->nullable();
          $table->integer('it_sum_qty')->nullable();
          $table->integer('it_use_cnt')->nullable();
          $table->decimal('it_use_avg', 2, 1)->nullable();
          $table->text('it_shop_memo')->nullable();
          $table->string('ec_mall_pid', 255)->nullable();
          $table->string('it_img1', 255)->nullable();
          $table->string('it_img2', 255)->nullable();
          $table->string('it_img3', 255)->nullable();
          $table->string('it_img4', 255)->nullable();
          $table->string('it_img5', 255)->nullable();
          $table->string('it_img6', 255)->nullable();
          $table->string('it_img7', 255)->nullable();
          $table->string('it_img8', 255)->nullable();
          $table->string('it_img9', 255)->nullable();
          $table->string('it_img10', 255)->nullable();
          $table->string('it_1_subj', 255)->nullable();
          $table->string('it_2_subj', 255)->nullable();
          $table->string('it_3_subj', 255)->nullable();
          $table->string('it_4_subj', 255)->nullable();
          $table->string('it_5_subj', 255)->nullable();
          $table->string('it_6_subj', 255)->nullable();
          $table->string('it_7_subj', 255)->nullable();
          $table->string('it_8_subj', 255)->nullable();
          $table->string('it_9_subj', 255)->nullable();
          $table->string('it_10_subj', 255)->nullable();
          $table->string('it_1', 255)->nullable();
          $table->string('it_2', 255)->nullable();
          $table->string('it_3', 255)->nullable();
          $table->string('it_4', 255)->nullable();
          $table->string('it_5', 255)->nullable();
          $table->string('it_6', 255)->nullable();
          $table->string('it_7', 255)->nullable();
          $table->string('it_8', 255)->nullable();
          $table->string('it_9', 255)->nullable();
          $table->string('it_10', 255)->nullable();

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
