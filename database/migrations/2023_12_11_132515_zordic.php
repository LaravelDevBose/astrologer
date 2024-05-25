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
        Schema::create('Zordic', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->longText('Description');
            $table->string('Image');
            $table->date('created')->default(date("Y-m-d H:i:s"));
            $table->date('updated')->default(date("Y-m-d H:i:s"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Zordic');
    }
};
