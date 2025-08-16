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
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained('application_forms')->onDelete('cascade');

        // Interview details
            $table->dateTime('interview_date')->nullable(); // scheduled date and time
            $table->enum('status', ['selected', 'rejected'])->nullable(); // result of interview
            $table->text('notes')->nullable(); // optional notes from interviewer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
