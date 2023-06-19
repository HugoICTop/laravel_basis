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
        Schema::create('demonstrations', function (Blueprint $table) {
            $table->id();
            $table->string('greetings_id')->nullable();
            $table->string('naam')->nullable();
            $table->string('email')->nullable();
            $table->string('telefoon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demonstrations');
    }
};
