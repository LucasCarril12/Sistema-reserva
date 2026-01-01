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
        Schema::table('reservations_details', function (Blueprint $table) {
            //telefonos
            $table->string('telefono', 20);
            $table->string('telefono2', 20)->nullable();

            //direccion
            $table->string('direccion')->nullable();

            // textos largos
            $table->longText('obs')->nullable();
            $table->longText('requerimientos')->nullable();
            $table->longText('locomocion')->nullable();

            // aseguramos que total_ninios y total_adultos existan y sean INT
            $table->integer('total_ninios')->default(0);
            $table->integer('total_adultos')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations_details', function (Blueprint $table) {
            // revertir cambios
            $table->bigInteger('telefono');
            $table->bigInteger('telefono2')->nullable();

            $table->string('direccion');

            $table->longText('obs')->nullable();
            $table->longText('requerimientos')->nullable();
            $table->longText('locomocion')->nullable();

            $table->integer('total_ninios');
            $table->integer('total_adultos');
        });
    }
};
