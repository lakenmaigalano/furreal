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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shelter_id')
            ->constrained()
            ->restrictOnDelete();
            $table->foreignId('user_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->string('name');
            $table->string('species');
            $table->string('breed')->nullable();
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('gender');
            $table->text('description')->nullable();
            $table->string('status')->default('Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
