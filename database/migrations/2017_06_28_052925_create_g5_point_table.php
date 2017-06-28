<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG5PointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g5_point', function(Blueprint $table){
          $table->increments('po_id');
          $table->string('mb_id', 20);
          $table->dateTime('po_datetime');
          $table->string('po_content', 255);
          $table->integer('po_point');
          $table->integer('po_use_point');
          $table->tinyInteger('po_expired');
          $table->date('po_expire_date');
          $table->integer('po_mb_point');
          $table->string('po_rel_table', 20);
          $table->string('po_rel_id', 20);
          $table->string('po_rel_action', 255);

          $table->index(['mb_id', 'po_rel_table', 'po_rel_id', 'po_rel_action']);
          $table->index('po_expire_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g5_point');
    }
}
