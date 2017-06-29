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
        Schema::create('g5_shop_personalpay', function(Blueprint $table){
          $table->bigInteger('pp_id')->unsigned();
          $table->bigInteger('od_id')->unsigned();
          $table->string('pp_name', 255)->nullable();
          $table->string('pp_email', 255)->nullable();
          $table->string('pp_hp', 255)->nullable();
          $table->text('pp_content')->nullable();
          $table->tinyInteger('pp_use')->nullable();
          $table->integer('pp_price')->nullable();
          $table->string('pp_pg', 255)->nullable();
          $table->string('pp_tno', 255)->nullable();
          $table->string('pp_app_no', 20)->nullable();
          $table->string('pp_casseqno', 255)->nullable();
          $table->integer('pp_receipt_price')->nullable();
          $table->string('pp_settle_case', 255)->nullable();
          $table->string('pp_bank_account', 255)->nullable();
          $table->string('pp_deposit_name', 255)->nullable();
          $table->dateTime('pp_receipt_time')->nullable();
          $table->string('pp_receipt_ip', 255)->nullable();
          $table->text('pp_shop_memo')->nullable();
          $table->tinyInteger('pp_cash')->nullable();
          $table->string('pp_cash_no', 255)->nullable();
          $table->text('pp_cash_info')->nullable();
          $table->string('pp_ip', 255)->nullable();
          $table->dateTime('pp_time')->nullable();

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
