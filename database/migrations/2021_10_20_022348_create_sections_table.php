<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('num')->nullable();
            $table->string('name')->nullable();
            $table->string('edo')->nullable();
            $table->string('zona')->nullable();   
      
        });

        Schema::table('users', function(Blueprint $table){
            $table->unsignedBigInteger('section_id')->nullable()->after('id');  
            $table->foreign('section_id')->references('id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
