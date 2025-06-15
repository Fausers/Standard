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
        Schema::create('safaris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->integer('days');
            $table->integer('price')->default(0);
            $table->string('status')->default('pending');
            $table->string('highlights')->nullable();
            $table->string('availability')->nullable();
            $table->string('image')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('description')->nullable();
            $table->longText('included')->nullable();
            $table->longText('excluded')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safaris');
    }
};
