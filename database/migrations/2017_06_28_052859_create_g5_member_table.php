<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5MemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_member', function(Blueprint $table){
          $table->increments('mb_no');
          $table->string('username', 20);
          $table->string('password', 255);
          $table->string('mb_name', 255);
          $table->string('mb_nick', 255)->nullable();
          $table->date('mb_nick_date')->nullable();
          $table->string('mb_email', 255)->nullable();
          $table->string('mb_homepage', 255)->nullable();
          $table->tinyInteger('mb_level')->nullable();
          $table->char('mb_sex', 1)->nullable();
          $table->string('mb_birth', 255)->nullable();
          $table->string('mb_tel', 255)->nullable();
          $table->string('mb_hp', 255)->nullable();
          $table->string('mb_certify', 20)->nullable();
          $table->tinyInteger('mb_adult')->nullable();
          $table->string('mb_dupinfo', 255)->nullable();
          $table->char('mb_zip1', 3)->nullable();
          $table->char('mb_zip2', 3)->nullable();
          $table->string('mb_addr1', 255)->nullable();
          $table->string('mb_addr2', 255)->nullable();
          $table->string('mb_addr3', 255)->nullable();
          $table->string('mb_addr_jibeon', 255)->nullable();
          $table->text('mb_signature')->nullable();
          $table->string('mb_recommend', 255)->nullable();
          $table->integer('mb_point')->nullable();
          $table->dateTime('mb_today_login')->nullable();
          $table->string('mb_login_ip', 255)->nullable();
          $table->dateTime('mb_datetime')->nullable();
          $table->string('mb_ip', 255)->nullable();
          $table->string('mb_leave_date', 8)->nullable();
          $table->string('mb_intercept_date', 8)->nullable();
          $table->dateTime('mb_email_certify')->nullable();
          $table->string('mb_email_certify2', 255)->nullable();
          $table->text('mb_memo')->nullable();
          $table->string('mb_lost_certify', 255)->nullable();
          $table->tinyInteger('mb_mailling')->nullable();
          $table->tinyInteger('mb_sms')->nullable();
          $table->tinyInteger('mb_open')->nullable();
          $table->date('mb_open_date')->nullable();
          $table->text('mb_profile')->nullable();
          $table->string('mb_memo_call', 255)->nullable();
          $table->string('mb_1', 255)->nullable();
          $table->string('mb_2', 255)->nullable();
          $table->string('mb_3', 255)->nullable();
          $table->string('mb_4', 255)->nullable();
          $table->string('mb_5', 255)->nullable();
          $table->string('mb_6', 255)->nullable();
          $table->string('mb_7', 255)->nullable();
          $table->string('mb_8', 255)->nullable();
          $table->string('mb_9', 255)->nullable();
          $table->string('mb_10', 255)->nullable();
          $table->rememberToken();
          $table->timestamps();

          $table->unique('username');
          $table->index('mb_today_login');
          $table->index('mb_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_member');
    }
}
