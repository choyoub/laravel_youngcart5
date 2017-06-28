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
          $table->string('mb_id', 20);
          $table->string('mb_password', 255);
          $table->string('mb_name', 255);
          $table->string('mb_nick', 255);
          $table->date('mb_nick_date');
          $table->string('mb_email', 255);
          $table->string('mb_homepage', 255);
          $table->tinyInteger('mb_level');
          $table->char('mb_sex', 1);
          $table->string('mb_birth', 255);
          $table->string('mb_tel', 255);
          $table->string('mb_hp', 255);
          $table->string('mb_certify', 20);
          $table->tinyInteger('mb_adult');
          $table->string('mb_dupinfo', 255);
          $table->char('mb_zip1', 3);
          $table->char('mb_zip2', 3);
          $table->string('mb_addr1', 255);
          $table->string('mb_addr2', 255);
          $table->string('mb_addr3', 255);
          $table->string('mb_addr_jibeon', 255);
          $table->text('mb_signature');
          $table->string('mb_recommend', 255);
          $table->integer('mb_point');
          $table->dateTime('mb_today_login');
          $table->string('mb_login_ip', 255);
          $table->dateTime('mb_datetime');
          $table->string('mb_ip', 255);
          $table->string('mb_leave_date', 8);
          $table->string('mb_intercept_date', 8);
          $table->dateTime('mb_email_certify');
          $table->string('mb_email_certify2', 255);
          $table->text('mb_memo');
          $table->string('mb_lost_certify', 255);
          $table->tinyInteger('mb_mailling');
          $table->tinyInteger('mb_sms');
          $table->tinyInteger('mb_open');
          $table->date('mb_open_date');
          $table->text('mb_profile');
          $table->string('mb_memo_call', 255);
          $table->string('mb_1', 255);
          $table->string('mb_2', 255);
          $table->string('mb_3', 255);
          $table->string('mb_4', 255);
          $table->string('mb_5', 255);
          $table->string('mb_6', 255);
          $table->string('mb_7', 255);
          $table->string('mb_8', 255);
          $table->string('mb_9', 255);
          $table->string('mb_10', 255);

          $table->unique('mb_id');
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
