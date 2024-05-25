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
        Schema::create('tarot_3_card_career', function (Blueprint $table) {
            $table->id();
            $table->string('h1');
            $table->text('content');
            $table->string('banner_image');
            $table->string('button_text');
            $table->string('button_url');
            $table->string('h2');
            $table->text('content2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarot_3_card_career');
    }
};
