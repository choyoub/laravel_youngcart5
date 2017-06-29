<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_category', function(Blueprint $table){
          $table->string('ca_id', 10);
          $table->string('ca_name', 255);
          $table->integer('ca_order');
          $table->string('ca_skin_dir', 255)->nullable();
          $table->string('ca_mobile_skin_dir', 255)->nullable();
          $table->string('ca_skin', 255)->nullable();
          $table->string('ca_mobile_skin', 255)->nullable();
          $table->integer('ca_img_width')->nullable();
          $table->integer('ca_img_height')->nullable();
          $table->integer('ca_mobile_img_width')->nullable();
          $table->integer('ca_mobile_img_height')->nullable();
          $table->string('ca_sell_email', 255)->nullable();
          $table->tinyInteger('ca_use')->nullable();
          $table->integer('ca_stock_qty')->nullable();
          $table->tinyInteger('ca_explan_html')->nullable();
          $table->text('ca_head_html')->nullable();
          $table->text('ca_tail_html')->nullable();
          $table->text('ca_mobile_head_html')->nullable();
          $table->text('ca_mobile_tail_html')->nullable();
          $table->integer('ca_list_mod')->nullable();
          $table->integer('ca_list_row')->nullable();
          $table->integer('ca_mobile_list_mod')->nullable();
          $table->integer('ca_mobile_list_row')->nullable();
          $table->string('ca_include_head', 255)->nullable();
          $table->string('ca_include_tail', 255)->nullable();
          $table->string('ca_mb_id', 255)->nullable();
          $table->tinyInteger('ca_cert_use')->nullable();
          $table->tinyInteger('ca_adult_use')->nullable();
          $table->tinyInteger('ca_nocoupon')->nullable();
          $table->string('ca_1_subj', 255)->nullable();
          $table->string('ca_2_subj', 255)->nullable();
          $table->string('ca_3_subj', 255)->nullable();
          $table->string('ca_4_subj', 255)->nullable();
          $table->string('ca_5_subj', 255)->nullable();
          $table->string('ca_6_subj', 255)->nullable();
          $table->string('ca_7_subj', 255)->nullable();
          $table->string('ca_8_subj', 255)->nullable();
          $table->string('ca_9_subj', 255)->nullable();
          $table->string('ca_10_subj', 255)->nullable();
          $table->string('ca_1', 255)->nullable();
          $table->string('ca_2', 255)->nullable();
          $table->string('ca_3', 255)->nullable();
          $table->string('ca_4', 255)->nullable();
          $table->string('ca_5', 255)->nullable();
          $table->string('ca_6', 255)->nullable();
          $table->string('ca_7', 255)->nullable();
          $table->string('ca_8', 255)->nullable();
          $table->string('ca_9', 255)->nullable();
          $table->string('ca_10', 255)->nullable();

          $table->primary('ca_id');
          $table->index('ca_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_category');
    }
}
