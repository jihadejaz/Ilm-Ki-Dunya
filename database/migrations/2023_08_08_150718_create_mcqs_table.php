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
        Schema::create('mcqs', function (Blueprint $table) {
            $table->id('mcqs_id');
            $table->text('ques');
            $table->text('ans_1');
            $table->text('ans_2');
            $table->text('ans_3');
            $table->text('ans_4');
            $table->text('right_ans');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcqs');
    }
};
