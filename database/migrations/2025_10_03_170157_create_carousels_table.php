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
            $table->string('image')->nullable(); // Path to the image
            $table->string('title')->nullable(); // e.g., "VISAS TRAMITES Y ASESORIA BOLIVIA"
            $table->string('subtitle')->nullable(); // e.g., "Descubramos el Mundo Juntos"
            $table->string('button_text')->nullable(); // e.g., "Nuestros Servicios"
            $table->string('button_link')->nullable(); // e.g., "/service"
            $table->boolean('is_active')->default(true); // To toggle visibility
            $table->integer('order')->default(0); // To control slide order
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carousels');
    }
}
