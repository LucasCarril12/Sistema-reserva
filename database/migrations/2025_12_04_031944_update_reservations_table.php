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
        Schema::table('reservations', function (Blueprint $table) {
            if (Schema::hasColumn('reservations', 'total_amount')) {
                $table->dropColumn('total_amount');
            }
            if (Schema::hasColumn('reservations', 'payment_status')) {
                $table->dropColumn('payment_status');
            }

            // Agregar la columna institucion
            $table->string('institucion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Restaurar columnas eliminadas
            $table->decimal('total_amount', 8, 2)->nullable();
            $table->string('payment_status')->nullable();

            // Eliminar institución
            $table->dropColumn('institucion');
        });
    }
};
