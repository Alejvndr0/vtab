<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // Ruta de la imagen
            $table->string('name')->nullable(); // Nombre del paquete
            $table->string('location')->nullable(); // Ej.: "Paris, Francia"
            $table->string('duration')->nullable(); // Ej.: "7 días"
            $table->string('persons')->nullable(); // Ej.: "2 personas"
            $table->float('rating')->nullable(); // Ej.: 4.5
            $table->integer('reviews')->nullable(); // Ej.: 250
            $table->decimal('price', 8, 2)->nullable(); // Ej.: 350.00
            $table->boolean('is_active')->default(true); // Para activar/desactivar
            $table->integer('order')->default(0); // Para controlar el orden
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('packages');
    }
}