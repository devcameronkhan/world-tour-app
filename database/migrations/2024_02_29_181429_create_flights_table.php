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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('airline_id')->constrained()->onDelete('cascade');
            $table->foreignId('departure_airport_id')->constrained('airports', 'id')->onDelete('cascade');
            $table->foreignId('arrival_airport_id')->constrained('airports', 'id')->onDelete('cascade');
            $table->string('departure_time');
            $table->bigInteger('number');
            $table->string('arrival_time');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
