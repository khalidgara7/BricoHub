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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_reservation')->nullable();
            $table->enum('status', ['rejected', 'cancelled', 'pending', 'accepted'])->default('pending');
            $table->float('price');
            $table->unsignedBigInteger('employeur_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('employeur_id')->references('user_id')->on('employeurs')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
