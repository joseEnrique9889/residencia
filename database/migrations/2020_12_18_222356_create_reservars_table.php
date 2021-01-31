<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservars', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->Time('hora', $precision = 0);
            $table->enum('cantidad', ['1', '2','3','4','5'])->default('1');
            $table->enum('recibir',['Regresado','NoRegresado'])->default('NoRegresado');

            $table->enum('deuda',['Si','No'])->default('No'); 
            $table->double('vida')->nullable();
            $table->string('codigo')->nullable();
            $table->tinyInteger('reservas')->nullable();
            
            $table->string('comentario')->nullable()->default('sin comentario');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('material_id')->references('id')->on('materials')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('reservars');
    }
}
