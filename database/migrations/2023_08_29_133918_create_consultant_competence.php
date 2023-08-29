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
        Schema::create('consultant_competence', function (Blueprint $table) {
            $table->id();
            $table->foreignId("consultant_id")->nullable()->references('id')->on('consultants');
            $table->foreignId("domaine_completence_id")->nullable()->references('id')->on('domaine_competences');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_consultant_competence');
    }
};
