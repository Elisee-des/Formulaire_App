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
        Schema::create('consultant_techno', function (Blueprint $table) {
            $table->id();
            $table->foreignId("consultant_id")->nullable()->references('id')->on('consultants');
            $table->foreignId("outil_technologie_id")->nullable()->references('id')->on('outil_technologies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_consultant_techno');
    }
};
