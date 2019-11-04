<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre');
            $table->unsignedBigInteger('profesor');
            $table->foreign('profesor')->references('id')->on('docente');
            
            $table->unsignedBigInteger('curricula');
            $table->foreign('curricula')->references('id')->on('plan_curricular');

            $table->unsignedBigInteger('IdCurso');
            $table->foreign('IdCurso')->references('id')->on('curso');            

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
        Schema::dropIfExists('materia');
    }
}
