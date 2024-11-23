<?php

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
        Schema::create('disputes', function (Blueprint $table) {
            $table->id('dispute_id');
            $table->foreignId('job_id')->constrained('job_postings')->onDelete('cascade');
            $table->foreignId('client_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('Technician_id')->constrained('users')->onDelete('cascade');
            $table->text('reason');
            $table->enum('status', ['open', 'resolved', 'closed']);
            $table->text('resolution')->nullable();
            $table->timestamps();
            $table->softDeletes();  // Soft delete
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disputes');
    }
};
