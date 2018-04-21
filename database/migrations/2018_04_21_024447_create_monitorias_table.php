<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorias', function (Blueprint $table) {
            $table->increments('IdMonitoria');
            $table->unsignedInteger('IdMonitor');
            $table->foreign('IdMonitor')->references('IdMonitor')->on('monitors')->onDelete('cascade');
            $table->string('materia', 50);
            $table->date('fecha');
            $table->string('salon',10);
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
        Schema::dropIfExists('monitorias');
    }
}
