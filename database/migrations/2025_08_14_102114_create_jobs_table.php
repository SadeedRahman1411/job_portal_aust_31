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
        Schema::create('jobs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('organization_id')->constrained('organizations')->onDelete('cascade'); // FK → organizations.id
        $table->string('title');
        $table->text('description');
        $table->json('requirements'); // use JSON if you want structured data, or text for plain
        $table->string('location');
        $table->string('salary_range')->nullable();
        $table->enum('employment_type', ['full-time', 'part-time', 'internship', 'contract']);
        $table->date('deadline');
        $table->dateTime('posted_at')->useCurrent(); // Automatically set to current timestamp
        $table->enum('status', ['enlisted', 'in_progress', 'completed'])->default('enlisted'); // updated job status  
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
