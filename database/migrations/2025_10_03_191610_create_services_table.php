<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable(); // Ej.: "fa fa-2x fa-ship"
            $table->string('title')->nullable(); // Ej.: "CRUCEROS"
            $table->text('description')->nullable(); // Descripción del servicio
            $table->boolean('is_active')->default(true); // Para activar/desactivar
            $table->integer('order')->default(0); // Para controlar el orden de los servicios
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}