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
        Schema::create('consultant_diplome', function (Blueprint $table) {
            $table->id();
            $table->foreignId("consultant_id")->nullable()->references('id')->on('consultants');
            $table->foreignId("niveau_diplome_id")->nullable()->references('id')->on('niveau_diplomes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_consultant_diplome');
    }
};
