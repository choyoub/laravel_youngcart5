<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5LoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_login', function(Blueprint $table){
          $table->string('lo_ip', 255);
          $table->string('mb_id', 20);
          $table->dateTime('lo_datetime')->nullable();
          $table->text('lo_url')->nullable();

          $table->primary('lo_ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_login');
    }
}
