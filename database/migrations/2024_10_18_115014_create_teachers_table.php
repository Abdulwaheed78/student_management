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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();                  // Auto-incrementing ID (primary key)
            $table->string('name');        // Name of the teacher (string)
            $table->string('email')->unique();  // Email of the teacher (unique constraint)
            $table->string('education');   // Education qualification of the teacher (string)
            $table->date('dob');           // Date of birth (date field)
            $table->text('about');         // About field (long text for biography or description)
            $table->timestamps();          // Created_at and updated_at timestamps
            $table->softDeletes();         // Soft delete column to mark record as deleted
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
