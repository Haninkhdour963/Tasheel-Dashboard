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
        Schema::create('technician_profiles', function (Blueprint $table) {
            $table->id('Technician_id'); // Primary key for technician profiles
            $table->foreignId('user_id') // Foreign key to users table
            ->constrained('users')
                ->onDelete('cascade'); // Cascade delete to remove associated technician profile when user is deleted
            $table->text('skills'); // Technician skills
            $table->decimal('hourly_rate', 10, 2); // Hourly rate
            $table->text('certifications')->nullable(); // Certifications (nullable)
            $table->text('bio')->nullable(); // Bio (nullable)
            $table->string('location', 255); // Location with a max length of 255 characters
            $table->timestamp('available_from')->nullable(); // Available from date (nullable)
            $table->timestamps(); // Standard Laravel timestamps
            $table->softDeletes(); // Soft delete column
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technician_profiles');
    }
};
