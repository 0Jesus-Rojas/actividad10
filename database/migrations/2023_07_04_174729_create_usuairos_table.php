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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('TipoIdentificacion');
            $table->string('NumeroIdentificacion');
            $table->string('Telefono');
            $table->string('email');
            $table->string('profesion');
            $table->unsignedBigInteger('rol_id');
            $table->timestamps();

            $table->foreign('rol_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
