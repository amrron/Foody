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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id');
            $table->foreignUuid('subscription_id');
            $table->string('order_id')->unique();
            $table->string('status');
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->timestamp('transaction_time');
            $table->unsignedBigInteger('gross_amount');
            $table->string('payment_code')->nullable(); // Kode pembayaran (untuk transfer bank)
            $table->string('va_number')->nullable(); // Nomor Virtual Account (untuk bank transfer)
            $table->string('bank')->nullable(); // Nama bank yang digunakan
            $table->string('fraud_status')->nullable(); // Fraud status
            $table->timestamp('subscription_start')->nullable();
            $table->timestamp('subscription_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
