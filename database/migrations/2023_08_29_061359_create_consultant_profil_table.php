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
        Schema::create('consultant_profil', function (Blueprint $table) {
            $table->id();
            $table->foreignId("profil_id")->nullable()->references('id')->on('profils');
            $table->foreignId("consultant_id")->nullable()->references('id')->on('consultants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultant_profil');
    }
};
