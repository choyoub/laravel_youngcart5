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
          $table->longtext('co_content');
          $table->longtext('co_mobile_content');
          $table->string('co_skin', 255);
          $table->string('co_mobile_skin', 255);
          $table->tinyInteger('co_tag_filter_use');
          $table->integer('co_hit');
          $table->string('co_include_head', 255);
          $table->string('co_include_tail', 255);

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
