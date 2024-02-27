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
        Schema::create('tipo_asientos', function (Blueprint $table) {
            $table->increments('idTipoAsiento');
            $table->string('descripcion', 50);
            $table->double('precio');
            $table->string('estado', 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_tipo_asientos');
    }
};
