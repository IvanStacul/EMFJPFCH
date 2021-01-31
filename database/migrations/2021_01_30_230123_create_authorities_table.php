<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthoritiesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('authorities', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('position');
      $table->string('photo');
      $table->string('group');
      $table->integer('weight');
      $table->boolean('appointed')->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('authorities');
  }
}
