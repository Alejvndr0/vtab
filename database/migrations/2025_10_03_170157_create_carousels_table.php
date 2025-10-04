<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselsTable extends Migration
{
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // Path interno o nombre del archivo
            $table->string('image_url')->nullable(); // ✅ URL completa (Render o local)
            $table->string('title')->nullable(); // Ejemplo: "VISAS TRÁMITES Y ASESORÍA BOLIVIA"
            $table->string('subtitle')->nullable(); // Ejemplo: "Descubramos el Mundo Juntos"
            $table->string('button_text')->nullable(); // Ejemplo: "Nuestros Servicios"
            $table->string('button_link')->nullable(); // Ejemplo: "/service"
            $table->boolean('is_active')->default(true); // Mostrar o no el slide
            $table->integer('order')->default(0); // Orden del carrusel
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carousels');
    }
}
