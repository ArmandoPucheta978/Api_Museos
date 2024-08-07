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
        Schema::create('museo_tipo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('museo_id')->constrained('museos')->onDelete('cascade');
            $table->foreignId('tipo_id')->constrained('tipos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('museo_tipo');
    }
};
