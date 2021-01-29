<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('news', function (Blueprint $table) {
      $table->bigIncrements('id');
      // Agregar un nuevo campo donde se va a guardar el valor de la foreign key
      $table->unsignedBigInteger('user_id')->nullable();  # author
      $table->string('title');
      $table->text('summary');
      $table->mediumText('content');
      $table->string('cover_page');
      $table->date('date');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::table('news', function (Blueprint $table) {
      // Agregar una restricción de foreign key a ese campo referenciando la tabla
      $table->foreign('user_id')->references('id')->on('users')
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
    Schema::dropIfExists('news');
  }
}
