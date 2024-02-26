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
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->unsignedBigInteger('domaine_id');
            $table->unsignedBigInteger('employeur_id');
            $table->timestamps();
            $table->foreign('domaine_id')->references('id')->on('domaines')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('employeur_id')->references('id')->on('employeurs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
