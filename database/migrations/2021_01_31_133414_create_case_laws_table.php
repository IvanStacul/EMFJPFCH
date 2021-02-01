<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseLawsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('case_laws', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('category_id')->nullable();
      $table->string('url');
      $table->string('title');
      $table->string('description')->nullable();
      $table->date('case_law_date');
      $table->timestamps();
    });

    Schema::table('case_laws', function (Blueprint $table) {
      // Agregar una restricción de foreign key a ese campo referenciando la tabla
      $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('set null');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('case_laws');
  }
}
