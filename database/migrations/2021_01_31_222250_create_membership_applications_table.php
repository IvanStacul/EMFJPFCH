<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipApplicationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('membership_applications', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id')->nullable();
      $table->boolean('status')->nullable();
      $table->string('name');
      $table->string('last_name');
      $table->string('dni');
      $table->string('nationality');
      $table->date('birthdate');
      $table->string('civil_status');
      $table->string('home_address');
      $table->string('email')->unique();
      $table->string('personal_phone');
      $table->string('work_phone');
      $table->string('job');
      $table->string('dependence');
      $table->string('region'); # Circusncripción
      $table->string('department');
      $table->text('observations')->nullable();
      $table->timestamps();
    });

    Schema::table('membership_applications', function (Blueprint $table) {
      // Agregar una restricción de foreign key a ese campo referenciando la tabla
      $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('membership_applications');
  }
}
