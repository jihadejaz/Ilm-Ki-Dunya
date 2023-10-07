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
        Schema::create('dailytasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->unsignedBigInteger('course_id'); // Foreign key column
            $table->foreign('course_id')->references('id')->on('categories');
            $table->text('task_desc');
            $table->string('task_docs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dailytasks');
    }
};
