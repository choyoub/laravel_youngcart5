<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5MailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_mail', function(Blueprint $table){
          $table->increments('ma_id');
          $table->string('ma_subject', 255);
          $table->mediumText('ma_content');
          $table->dateTime('ma_time');
          $table->string('ma_ip', 255);
          $table->text('ma_last_option');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_mail');
    }
}
