<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopPersonalpayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_personalpay', function(){
          $table->bigInteger('pp_id', 20)->unsigned();
          $table->bigInteger('od_id', 20)->unsigned();
          $table->string('pp_name', 255);
          $table->string('pp_email', 255);
          $table->string('pp_hp', 255);
          $table->text('pp_content');
          $table->tinyInteger('pp_use', 4);
          $table->integer('pp_price', 11);
          $table->string('pp_pg', 255);
          $table->string('pp_tno', 255);
          $table->string('pp_app_no', 20);
          $table->string('pp_casseqno', 255);
          $table->integer('pp_receipt_price', 11);
          $table->string('pp_settle_case', 255);
          $table->string('pp_bank_account', 255);
          $table->string('pp_deposit_name', 255);
          $table->dateTime('pp_receipt_time');
          $table->string('pp_receipt_ip', 255);
          $table->text('pp_shop_memo');
          $table->tinyInteger('pp_cash', 4);
          $table->string('pp_cash_no', 255);
          $table->text('pp_cash_info');
          $table->string('pp_ip', 255);
          $table->dateTime('pp_time');

          $table->primary('pp_id');
          $table->index('od_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_personalpay');
    }
}
