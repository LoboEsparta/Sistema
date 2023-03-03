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

            $table->date('fecha');

            $table->string('Cedula')->nullable();
            $table->string('Repetidor')->nullable();
            $table->string('UTR')->nullable();
            $table->string('Otros')->nullable();

            $table->string('Mantenimiento');

            $table->string('Ubicacion');
            $table->string('Responsable');
            $table->string('Oficina');
            $table->string('Direccion');

            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Serie');

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

            $table->string('Tierras');
            $table->string('Respaldo');

            $table->string('Antena');
            $table->string('tabla1')->nullable();
            $table->string('Cable');
            $table->string('tabla2')->nullable();
            $table->string('Conectores');
            $table->string('tabla3')->nullable();
            $table->string('Bocina');
            $table->string('tabla4')->nullable();
            $table->string('Control');
            $table->string('tabla5')->nullable();
            $table->string('Cabeza');
            $table->string('tabla6')->nullable();
            $table->string('Terminal');
            $table->string('tabla7')->nullable();
            $table->string('Cableado');
            $table->string('tabla8')->nullable();
            $table->string('Fusible');
            $table->string('tabla9')->nullable();
            $table->string('Portafusible');
            $table->string('tabla10')->nullable();
            $table->string('Terminalb');
            $table->string('tabla11')->nullable();
            $table->string('Cargadorbat');
            $table->string('tabla12')->nullable();
            $table->string('Limpieza');
            $table->string('tabla13')->nullable();
            $table->string('Bateria');
            $table->string('tabla14')->nullable();
            
            $table->string('textarea');
            $table->string('inspecciono');
            $table->string('rpe');
            $table->string('textoarea');
            $table->string('usuario');

            $table->string('Foto');

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
