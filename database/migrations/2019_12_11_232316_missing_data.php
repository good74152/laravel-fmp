<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MissingData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('missingdatas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('OP_AC_UNIT_NM1')->nullable();
          $table->string('OP_AC_UNIT_NM2')->nullable();
          $table->string('OP_AC_UNIT_NM3')->nullable();
          $table->string('OP_PU_DATE')->nullable();
          $table->string('OP_PU_PLACE')->nullable();
          $table->string('OP_AN_CONTENT')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
