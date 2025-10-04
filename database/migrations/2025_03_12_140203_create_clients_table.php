<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('full_name');
            $table->string('email')->nullable()->unique();
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->text('address')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('inicio_tramite')->nullable();
            $table->string('tipo_tramite')->nullable();
            $table->string('destino')->nullable();
            $table->decimal('costo', 10, 2)->nullable();
            $table->string('numero_contrato')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}