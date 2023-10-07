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
        Schema::create('adminchats', function (Blueprint $table) {
            $table->id();
            $table->text('admin_msg');
            $table->unsignedBigInteger('user_id'); // Foreign key column
            $table->foreign('user_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminchats');
    }
};
