<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5GroupMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_group_member', function(Blueprint $table){
          $table->increments('gm_id');
          $table->string('gr_id', 255);
          $table->string('mb_id', 20);
          $table->dateTime('gm_datetime')->nullable();

          $table->index('gr_id');
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
        Schema::dropIfExists('g5_group_member');
    }
}
