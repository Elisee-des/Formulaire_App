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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("date_naissance")->nullable();
            $table->string("email_1")->nullable();
            $table->string("email_2")->nullable();
            $table->string("telephone_1")->nullable();
            $table->string("telephone_2")->nullable();
            $table->string("niveau_diplome_1")->nullable();
            $table->string("diplome_1")->nullable();
            $table->string("annee_obtention_diplome_1")->nullable();
            $table->string("niveau_diplome_2")->nullable();
            $table->string("diplome_2")->nullable();
            $table->string("annee_obtention_diplome_2")->nullable();
            $table->longText("autre_diplomes")->nullable();
            $table->mediumText("projet_realiser")->nullable();
            // $table->foreignId("domaine_competence_id")->nullable()->references('id')->on('domaine_competences');
            // $table->foreignId("outil_techno_maitriser_id")->nullable()->references('id')->on('outil_technologies');
            $table->foreignId("pays_id")->nullable()->references('id')->on('pays');
            // $table->foreignId("profil_consultant_id")->nullable()->references('id')->on('profils');
            // $table->foreignId("niveau_diplome_id")->nullable()->references('id')->on('niveau_diplomes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
    }
};
