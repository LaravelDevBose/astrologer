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
        Schema::table('Horoscope', function (Blueprint $table) {
            $table->unsignedBigInteger('horoscopecate_id');
            $table->foreign('horoscopecate_id')->references('id')->on('HoroscopeCategory');
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
