<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicals', function (Blueprint $table) {
            $table->id();
            $table->string('numEscalafon');
            $table->string('nombre');
            $table->string('expediente');
            $table->string('especialidad');
            $table->string('recomendadoA');
            $table->string('fechaUltiRecomendacion');
            $table->string('fechaIngreRecomendacion');
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
        Schema::dropIfExists('historicals');
    }
}
