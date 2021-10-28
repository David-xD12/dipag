<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('category',20);
            $table->string('proceedings',20);
            $table->string('section',10);
            $table->integer('nsi');
            $table->string('workplace',20);
            $table->string('location',20);
            $table->string('abilities',50);
            $table->string('notes',200);
            $table->string('changePassword',20);
            $table->string('mailChange',20);
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
        Schema::dropIfExists('tecnicos');
    }
}
