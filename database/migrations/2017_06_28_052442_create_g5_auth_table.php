<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5AuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_auth', function($table) {
          $table->string('mb_id', 20);
          $table->string('au_menu', 20);
          $table->enum('au_auth', ['r', 'w', 'd']);

          $table->primary(['mb_id', 'au_menu']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_auth');
    }
}
