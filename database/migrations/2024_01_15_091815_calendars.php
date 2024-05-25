<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('calendars', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->boolean('favorable_major_transit')->default(0);
        $table->boolean('new_zodiac_season')->default(0);
        $table->boolean('retrograde')->default(0);
        $table->boolean('moon_events')->default(0);
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
