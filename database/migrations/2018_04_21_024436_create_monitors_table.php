<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->increments('IdMonitor');
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('programa_academico', 50);
            $table->integer('semestre');
            $table->string('cedula',10)->unique();
            $table->string('email',50)->unique();
            $table->string('telefono',10);
            $table->string('celular',10);
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
        Schema::dropIfExists('monitors');
    }
}
