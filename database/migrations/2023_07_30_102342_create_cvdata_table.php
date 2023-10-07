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
        Schema::create('cvdata', function (Blueprint $table) {
            $table->id();

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('number')->nullable();
            $table->string('education')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('religion')->nullable();
            $table->text('address')->nullable();
            // $table->string('number')->nullable();
            $table->text('profession')->nullable();
            $table->text('about')->nullable();
            $table->text('information')->nullable();
            $table->text('information2')->nullable();
            $table->integer('experience')->nullable();
            $table->text('picture')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvdata');
    }
};
