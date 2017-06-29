<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5PollEtcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_poll_etc', function(Blueprint $table){
          $table->integer('pc_id');
          $table->integer('po_id');
          $table->string('mb_id', 20);
          $table->string('pc_name', 255)->nullable();
          $table->string('pc_idea', 255)->nullable();
          $table->dateTime('pc_datetime')->nullable();

          $table->primary('pc_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_poll_etc');
    }
}
