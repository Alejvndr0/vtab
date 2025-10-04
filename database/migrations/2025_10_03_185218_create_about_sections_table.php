<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Ej.: "Acerca de Nosotros"
            $table->text('description')->nullable(); // Texto principal
            $table->string('main_image')->nullable(); // Imagen principal
            $table->string('image_1')->nullable(); // Primera imagen secundaria
            $table->string('image_2')->nullable(); // Segunda imagen secundaria
            $table->string('button_text')->nullable(); // Ej.: "Nuestros Servicios"
            $table->string('button_link')->nullable(); // Ej.: "/service"
            $table->boolean('is_active')->default(true); // Para activar/desactivar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_sections');
    }
}
