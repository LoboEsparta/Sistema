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
        Schema::create('radiouhfs', function (Blueprint $table) {
            $table->id();
           
            $table->string('area');
            $table->string('tipo');

            $table->date('fecha')->nullable();

            $table->string('Cedula')->nullable();
            $table->string('Repetidor')->nullable();
            $table->string('UTR')->nullable();
            $table->string('Otros')->nullable();

            $table->string('Mantenimiento')->nullable();

            $table->string('Ubicacion');
            $table->string('Responsable');
            $table->string('Oficina');
            $table->string('Direccion');

            $table->string('Marca')->nullable();
            $table->string('Modelo')->nullable();
            $table->string('Serie')->nullable();

            $table->string('Potencia');
            $table->string('Reflejo');
            $table->string('Modulacion');
            $table->string('Sensibilidad');
            $table->string('Frec');
            $table->string('Señal');
            $table->string('RX');
            $table->string('Tx');
            $table->string('VCA');
            $table->string('VCD');
            $table->string('Cargador');
            $table->string('Banco');
            $table->string('Inversor'); 
            
            $table->string('Foto')->nullable();
            $table->string('Fotodos')->nullable();
            $table->string('Fototres')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radiouhfs');
    }
};
