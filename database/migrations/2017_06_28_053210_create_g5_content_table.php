<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5ContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_content', function(Blueprint $table){
          $table->string('co_id', 20);
          $table->tinyInteger('co_html');
          $table->string('co_subject', 255);
          $table->longtext('co_content')->nullable();
          $table->longtext('co_mobile_content')->nullable();
          $table->string('co_skin', 255)->nullable();
          $table->string('co_mobile_skin', 255)->nullable();
          $table->tinyInteger('co_tag_filter_use')->nullable();
          $table->integer('co_hit')->nullable();
          $table->string('co_include_head', 255)->nullable();
          $table->string('co_include_tail', 255)->nullable();

          $table->primary('co_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_content');
    }
}
