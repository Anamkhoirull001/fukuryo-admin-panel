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
        Schema::create('master_books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('isbn')->unique();
            $table->foreignId('category_id')->constrained('master_categories')->cascadeOnDelete();
            $table->foreignId('author_id')->constrained('master_authors')->cascadeOnDelete();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_books');
    }
};
