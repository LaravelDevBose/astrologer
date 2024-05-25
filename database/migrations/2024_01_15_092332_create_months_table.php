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
        Schema::create('months', function (Blueprint $table) {
        $table->id();
        $table->foreignId('calendar_id')->constrained(); // Assuming a foreign key relationship with the calendars table
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('months');
    }
};
