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
       Schema::create('application_forms', function (Blueprint $table) {
    $table->id();
    $table->foreignId('jobs_id')->constrained('jobs')->onDelete('cascade');
    $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade');
    $table->enum('status', ['pending', 'rejected'])->default('pending');
    $table->text('cover_letter')->nullable();
    $table->json('skills')->nullable();
    $table->string('resume')->nullable(); 
    $table->timestamp('applied_at')->useCurrent();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicaion__forms');
    }
};
