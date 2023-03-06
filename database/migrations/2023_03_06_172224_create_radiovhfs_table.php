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

            $table->string('tipo')->nullable();
            $table->string('area')->nullable();

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
            $table->string('textoarea')->nullable();
            $table->string('usuario')->nullable();

            $table->string('Foto')->nullable();
            
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
