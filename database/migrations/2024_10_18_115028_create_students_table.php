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
        Schema::create('students', function (Blueprint $table) {
            $table->id();                  // Auto-incrementing ID (primary key)
            $table->string('name');        // Name of the student (string)
            $table->string('class');       // Class of the student (e.g., 10th, 9th, etc.)
            $table->unsignedBigInteger('teacher_id');  // Foreign key for teacher (unsigned big integer)
            $table->decimal('yearly_fees', 8, 2);      // Yearly fees (decimal with 2 decimal points)
            $table->date('admission_date'); // Admission date (date field)
            $table->timestamps();           // Created_at and updated_at timestamps
            $table->softDeletes();          // Soft delete column to mark records as deleted

            // Optional: Foreign key constraint to reference the teachers table
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
