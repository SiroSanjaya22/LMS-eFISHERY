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
        Schema::create('question_quiz', function (Blueprint $table) {
            $table->id('Question_Id');
            $table->foreignId('Quiz_Id')->constrained('quiz', 'Quiz_Id')->onDelete('cascade');
            $table->string('Question');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_quiz');
    }
};