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
        Schema::create('destination_attractions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->longText('desc');
                $table->string('image')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_attractions');
    }
};
