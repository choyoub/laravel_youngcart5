<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5RoleAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('g5_role_admins', function(Blueprint $table){
        $table->increments('id');
        $table->integer('role_id')->unsigned();
        $table->string('mb_id', 20);
        $table->timestamps();

        $table->unique(['role_id', 'mb_id']);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_role_admins');
    }
}
