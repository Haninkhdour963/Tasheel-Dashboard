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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('job_postings');
            $table->foreignId('client_id')->constrained('users');
            $table->foreignId('technician_id')->constrained('technicians');
            $table->decimal('amount', 10, 2);
            $table->enum('payment_method', ['credit_card', 'bank_transfer', 'paypal', 'other']);
            $table->enum('payment_status', ['pending', 'completed', 'failed', 'refunded']);
            $table->string('transaction_id', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};