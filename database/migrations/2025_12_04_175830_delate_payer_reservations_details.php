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
        // Primero verificamos qué columnas existen
        $columns = Schema::getColumnListing('reservations_details');

        Schema::table('reservations_details', function (Blueprint $table) use ($columns) {

            if (in_array('transaction_id', $columns)) {
                $table->dropColumn('transaction_id');
            }

            if (in_array('payer_id', $columns)) {
                $table->dropColumn('payer_id');
            }

            if (in_array('payer_email', $columns)) {
                $table->dropColumn('payer_email');
            }

            if (in_array('payment_status', $columns)) {
                $table->dropColumn('payment_status');
            }

            if (in_array('amount', $columns)) {
                $table->dropColumn('amount');
            }

            if (in_array('response_json', $columns)) {
                $table->dropColumn('response_json');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $columns = Schema::getColumnListing('reservations_details');

        Schema::table('reservations_details', function (Blueprint $table) use ($columns) {

            if (!in_array('transaction_id', $columns)) {
                $table->string('transaction_id')->nullable();
            }

            if (!in_array('payer_id', $columns)) {
                $table->string('payer_id')->nullable();
            }

            if (!in_array('payer_email', $columns)) {
                $table->string('payer_email')->nullable();
            }

            if (!in_array('payment_status', $columns)) {
                $table->string('payment_status')->nullable();
            }

            if (!in_array('amount', $columns)) {
                $table->decimal('amount', 10, 2)->nullable();
            }

            if (!in_array('response_json', $columns)) {
                $table->json('response_json')->nullable();
            }
        });
    }
};
