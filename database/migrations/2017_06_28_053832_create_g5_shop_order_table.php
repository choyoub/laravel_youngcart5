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
          $table->string('od_email', 100)->nullable();
          $table->string('od_tel', 20)->nullable();
          $table->string('od_hp', 20)->nullable();
          $table->char('od_zip1', 3)->nullable();
          $table->char('od_zip2', 3)->nullable();
          $table->string('od_addr1', 100)->nullable();
          $table->string('od_addr2', 100)->nullable();
          $table->string('od_addr3', 255)->nullable();
          $table->string('od_deposit_name', 20)->nullable();
          $table->string('od_b_name', 20)->nullable();
          $table->string('od_b_tel', 20)->nullable();
          $table->string('od_b_hp', 20)->nullable();
          $table->char('od_b_zip1', 3)->nullable();
          $table->char('od_b_zip2', 3)->nullable();
          $table->string('od_b_addr1', 100)->nullable();
          $table->string('od_b_addr2', 100)->nullable();
          $table->string('od_b_addr3', 255)->nullable();
          $table->string('od_b_addr_jibeon', 255)->nullable();
          $table->text('od_memo')->nullable();
          $table->integer('od_cart_count')->nullable();
          $table->integer('od_cart_price')->nullable();
          $table->integer('od_cart_coupon')->nullable();
          $table->integer('od_send_cost')->nullable();
          $table->integer('od_send_cost2')->nullable();
          $table->integer('od_send_coupon')->nullable();
          $table->integer('od_receipt_price')->nullable();
          $table->integer('od_cancel_price')->nullable();
          $table->integer('od_receipt_point')->nullable();
          $table->integer('od_refund_price')->nullable();
          $table->string('od_bank_account', 255)->nullable();
          $table->dateTime('od_receipt_time')->nullable();
          $table->integer('od_coupon')->nullable();
          $table->integer('od_misu')->nullable();
          $table->text('od_shop_memo')->nullable();
          $table->text('od_mod_history')->nullable();
          $table->string('od_status', 255)->nullable();
          $table->date('od_hope_date')->nullable();
          $table->string('od_settle_case', 255)->nullable();
          $table->tinyInteger('od_test')->nullable();
          $table->tinyInteger('od_mobile')->nullable();
          $table->string('od_pg', 255)->nullable();
          $table->string('od_tno', 255)->nullable();
          $table->string('od_app_no', 20)->nullable();
          $table->tinyInteger('od_escrow')->nullable();
          $table->string('od_casseqno', 255)->nullable();
          $table->tinyInteger('od_tax_flag')->nullable();
          $table->integer('od_tax_mny')->nullable();
          $table->integer('od_vat_mny')->nullable();
          $table->integer('od_free_mny')->nullable();
          $table->string('od_delivery_company', 255)->nullable();
          $table->string('od_invoice', 255)->nullable();
          $table->dateTime('od_invoice_time')->nullable();
          $table->tinyInteger('od_cash')->nullable();
          $table->string('od_cash_no', 255)->nullable();
          $table->text('od_cash_info')->nullable();
          $table->dateTime('od_time')->nullable();
          $table->string('od_ip', 255)->nullable();

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
