<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservar_id')->references('id')->on('reservars')->nullable();
            $table->string('recibir')->default('Recibido');
            $table->string('comentario')->default('sin comentario');
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
        Schema::dropIfExists('recibirs');
    }
}
