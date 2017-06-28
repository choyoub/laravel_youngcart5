<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ShopOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_shop_order', function(Blueprint $table){
          $table->bigInteger('od_id')->unsigned();
          $table->string('mb_id', 255);
          $table->string('od_name', 20);
          $table->string('od_email', 100);
          $table->string('od_tel', 20);
          $table->string('od_hp', 20);
          $table->char('od_zip1', 3);
          $table->char('od_zip2', 3);
          $table->string('od_addr1', 100);
          $table->string('od_addr2', 100);
          $table->string('od_addr3', 255);
          $table->string('od_deposit_name', 20);
          $table->string('od_b_name', 20);
          $table->string('od_b_tel', 20);
          $table->string('od_b_hp', 20);
          $table->char('od_b_zip1', 3);
          $table->char('od_b_zip2', 3);
          $table->string('od_b_addr1', 100);
          $table->string('od_b_addr2', 100);
          $table->string('od_b_addr3', 255);
          $table->string('od_b_addr_jibeon', 255);
          $table->text('od_memo');
          $table->integer('od_cart_count');
          $table->integer('od_cart_price');
          $table->integer('od_cart_coupon');
          $table->integer('od_send_cost');
          $table->integer('od_send_cost2');
          $table->integer('od_send_coupon');
          $table->integer('od_receipt_price');
          $table->integer('od_cancel_price');
          $table->integer('od_receipt_point');
          $table->integer('od_refund_price');
          $table->string('od_bank_account', 255);
          $table->dateTime('od_receipt_time');
          $table->integer('od_coupon');
          $table->integer('od_misu');
          $table->text('od_shop_memo');
          $table->text('od_mod_history');
          $table->string('od_status', 255);
          $table->date('od_hope_date');
          $table->string('od_settle_case', 255);
          $table->tinyInteger('od_test');
          $table->tinyInteger('od_mobile');
          $table->string('od_pg', 255);
          $table->string('od_tno', 255);
          $table->string('od_app_no', 20);
          $table->tinyInteger('od_escrow');
          $table->string('od_casseqno', 255);
          $table->tinyInteger('od_tax_flag');
          $table->integer('od_tax_mny');
          $table->integer('od_vat_mny');
          $table->integer('od_free_mny');
          $table->string('od_delivery_company', 255);
          $table->string('od_invoice', 255);
          $table->dateTime('od_invoice_time');
          $table->tinyInteger('od_cash');
          $table->string('od_cash_no', 255);
          $table->text('od_cash_info');
          $table->dateTime('od_time');
          $table->string('od_pwd', 255);
          $table->string('od_ip', 255);

          $table->primary('od_id');
          $table->index('mb_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_shop_order');
    }
}
