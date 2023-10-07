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
        Schema::create('mcq_results', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_name');
            $table->integer('marks_obtained');
            $table->integer('total_marks');
            $table->float('percentage_earned');
            $table->integer('correct_answers');
            $table->integer('wrong_answers');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('categories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('students');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcq_results');
    }
};
