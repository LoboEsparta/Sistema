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
        Schema::create('radiovhfs', function (Blueprint $table) {
            $table->id();

           
            $table->string('area')->nullable();
            $table->string('tipo')->nullable();

            $table->date('fecha')->nullable();

            $table->string('Cedula')->nullable();
            $table->string('Repetidor')->nullable();
            $table->string('UTR')->nullable();
            $table->string('Otros')->nullable();

            $table->string('Mantenimiento')->nullable();

            $table->string('Ubicacion')->nullable();
            $table->string('Responsable')->nullable();
            $table->string('Oficina')->nullable();
            $table->string('Direccion')->nullable();

            $table->string('Marca')->nullable();
            $table->string('Modelo')->nullable();
            $table->string('Serie')->nullable();

            $table->string('Potencia')->nullable();
            $table->string('Reflejo')->nullable();
            $table->string('Modulacion')->nullable();
            $table->string('Sensibilidad')->nullable();
            $table->string('Frec')->nullable();
            $table->string('Señal')->nullable();
            $table->string('RX')->nullable();
            $table->string('Tx')->nullable();
            $table->string('VCA')->nullable();
            $table->string('VCD')->nullable();
            $table->string('Cargador')->nullable();
            $table->string('Banco')->nullable();
            $table->string('Inversor')->nullable(); 
            
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
        Schema::dropIfExists('radiovhfs');
    }
};
