<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5MemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_memo', function(Blueprint $table){
          $table->integer('me_id');
          $table->string('me_recv_mb_id', 20);
          $table->string('me_send_mb_id', 20)->nullable();
          $table->dateTime('me_send_datetime')->nullable();
          $table->dateTime('me_read_datetime')->nullable();
          $table->text('me_memo')->nullable();

          $table->primary('me_id');
          $table->index('me_recv_mb_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_memo');
    }
}
