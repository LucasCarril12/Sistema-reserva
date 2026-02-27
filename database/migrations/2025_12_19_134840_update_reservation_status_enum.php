<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // SQLite doesn't support modifying enum columns via raw SQL, so only
        // run this statement when using a driver that supports it (e.g. MySQL).
        if (Schema::getConnection()->getDriverName() !== 'sqlite') {
            DB::statement("ALTER TABLE reservations
                MODIFY reservation_status ENUM(
                    'pendiente',
                    'confirmada',
                    'realizada',
                    'cancelada'
                )
            ");
        }
    }

    public function down()
    {
        if (Schema::getConnection()->getDriverName() !== 'sqlite') {
            DB::statement("
                ALTER TABLE reservations
                MODIFY reservation_status ENUM(
                    'pendiente',
                    'confirmada',
                    'cancelada'
                )
            ");
        }
    }

};
