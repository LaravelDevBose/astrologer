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
        Schema::create('3_card_tarot_love_reading', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('content');
            $table->string('button_text');
            $table->string('button_url');
            $table->text('content_2');
            $table->string('button_2_text');
            $table->string('button_2_url');
            $table->text('content_3');
            // Add more fields as needed

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
