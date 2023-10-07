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
        Schema::create('students', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('gender');
            $table->string('password');
            $table->string('status');
            $table->string('dob');           
            $table->text('image')->nullable();
            $table->string('Role');           



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
