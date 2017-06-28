<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5CertHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_cert_history', function(Blueprint $table){
          $table->increments('cr_id');
          $table->string('mb_id', 20);
          $table->string('cr_company', 255);
          $table->string('cr_method', 255);
          $table->string('cr_ip', 255);
          $table->date('cr_date');
          $table->time('cr_time');

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
        Schema::dropIfExists('g5_cert_history');
    }
}
