<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    public function up(): void
    {
        Schema::table('reservation', function (Blueprint $table) {
            // Renombrar status a reservation_status (si querés mantener ese nombre)
            if (Schema::hasColumn('reservation', 'status')) {
                $table->renameColumn('status', 'reservation_status');
            }

            // Cambiar enums: si DB soporta cambios directos con enum, re-definirlos
            // Laravel no tiene un helper enum-change directo; usamos MODIFY via raw SQL
            DB::statement("ALTER TABLE `reservation`
                MODIFY `reservation_status` ENUM('pendiente','confirmada','cancelada') NOT NULL DEFAULT 'confirmada'");

            // Cambiar total_amount a mayor precision
            $table->decimal('total_amount', 10, 2)->nullable()->change();

            // Cambiar payment_status ENUM a valores consistentes (minúsculas)
            DB::statement("ALTER TABLE `reservation`
                MODIFY `payment_status` ENUM('pendiente','pago','fallido') NOT NULL DEFAULT 'pendiente'");

            // Renombrar typo cancellation_raseon -> cancellation_reason (si existe)
            if (Schema::hasColumn('reservation', 'cancellation_raseon')) {
                $table->renameColumn('cancellation_raseon', 'cancellation_reason');
            }
        });
    }

    public function down(): void
    {
        Schema::table('reservation', function (Blueprint $table) {
            // Opcional: revertir cambios según necesites
        });
    }
};
