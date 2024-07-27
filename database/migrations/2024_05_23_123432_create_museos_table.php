<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('museos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubicacion');
            $table->string('ciudad');
            $table->string('pais');
            $table->decimal('costo_entrada', 10, 2)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('contacto')->nullable();
            $table->string('sitio_web')->nullable();
            $table->double('latitud')->nullable();
            $table->double('longitud')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('museos');
    }
};
