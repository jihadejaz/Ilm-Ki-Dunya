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
        Schema::create('messages_sends', function (Blueprint $table) {
            $table->id();
            $table->text('s_Message');
            $table->unsignedBigInteger('send_id');
            $table->foreign('send_id')->references('id')->on('students');
            $table->unsignedBigInteger('login_id');
            $table->foreign('login_id')->references('id')->on('students');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages_sends');
    }
};
