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
       Schema::create('tarots', function (Blueprint $table) {
            $table->id();
            $table->string('top_banner_media');
            $table->string('h1');
            $table->string('h2');
            $table->text('content_1');
            $table->string('button_1_text');
            $table->string('button_1_url');
            $table->text('content_2');
            $table->string('button_2_text');
            $table->string('button_2_url');
            $table->text('content_3');
            $table->string('button_3_text');
            $table->string('button_3_url');
            $table->text('content_4');
            $table->string('button_4_text');
            $table->string('button_4_url');
            $table->text('content_5');
            $table->string('button_5_text');
            $table->string('button_5_url');
            // Add any additional fields as needed
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
