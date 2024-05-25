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
        Schema::create('HoroscopeCategory', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('contant');
            $table->string('thumbImage');
            $table->date('created')->default(date("Y-m-d H:i:s"));
            $table->date('updated')->default(date("Y-m-d H:i:s"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HoroscopeCategory');
    }
};
