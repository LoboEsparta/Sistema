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
        Schema::create('radiovhfdos', function (Blueprint $table) {
            $table->id();

            $table->string('Tierras')->nullable();
            $table->string('Respaldo')->nullable();

            $table->string('Antena')->nullable();
            $table->string('tabla1')->nullable();
            $table->string('Cable')->nullable();
            $table->string('tabla2')->nullable();
            $table->string('Conectores')->nullable();
            $table->string('tabla3')->nullable();
            $table->string('Bocina')->nullable();
            $table->string('tabla4')->nullable();
            $table->string('Control')->nullable();
            $table->string('tabla5')->nullable();
            $table->string('Cabeza')->nullable();
            $table->string('tabla6')->nullable();
            $table->string('Terminal')->nullable();
            $table->string('tabla7')->nullable();
            $table->string('Cableado')->nullable();
            $table->string('tabla8')->nullable();
            $table->string('Fusible')->nullable();
            $table->string('tabla9')->nullable();
            $table->string('Portafusible')->nullable();
            $table->string('tabla10')->nullable();
            $table->string('Terminalb')->nullable();
            $table->string('tabla11')->nullable();
            $table->string('Cargadorbat')->nullable();
            $table->string('tabla12')->nullable();
            $table->string('Limpieza')->nullable();
            $table->string('tabla13')->nullable();
            $table->string('Bateria')->nullable();
            $table->string('tabla14')->nullable();
            
            $table->string('textarea')->nullable();
            $table->string('inspecciono')->nullable();
            $table->string('rpe')->nullable();
            $table->string('usuario')->nullable();
            $table->string('VoBo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radiovhfdos');
    }
};
