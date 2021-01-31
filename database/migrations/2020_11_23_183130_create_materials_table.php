<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('codigo')->nullable();
            $table->double('vida')->nullable();
            $table->bigInteger('tiempo')->nullable();
            $table->integer('reservado')->nullable();
            $table->integer('cambio')->nullable();
           // $table->string('imagen')->nullable();
           $table->enum('estado', ['Bueno','Regular','Malo'])->nullable();
            $table->string('parent_id')->references('id')->on('materials')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
