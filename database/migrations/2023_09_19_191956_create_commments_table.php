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
        Schema::create('commments', function (Blueprint $table) {
            $table->id();
            $table->text('Comment');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('students');
            $table->unsignedBigInteger('lec_id');
            $table->foreign('lec_id')->references('id')->on('lectures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commments');
    }
};
