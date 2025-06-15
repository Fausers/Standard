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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('organizer')->nullable();
            $table->string('organizer_title')->nullable();
            $table->string('organizer_image')->nullable();
            $table->string('address')->nullable();
            $table->date('date')->nullable();
            $table->string('image')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('description')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file')->nullable();
            $table->string('status')->default('Pending')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
