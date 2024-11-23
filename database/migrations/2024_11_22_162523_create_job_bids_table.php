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
        Schema::create('job_bids', function (Blueprint $table) {
            $table->id('bid_id');
            $table->foreignId('job_id')->constrained('job_postings')->onDelete('cascade');
            $table->foreignId('Technician_id')->constrained('technician_profiles')->onDelete('cascade');
            $table->decimal('bid_amount', 10, 2);
            $table->text('bid_message');
            $table->enum('status', ['pending', 'accepted', 'declined']);
            $table->timestamps();
            $table->softDeletes();  // Soft delete
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_bids');
    }
};
