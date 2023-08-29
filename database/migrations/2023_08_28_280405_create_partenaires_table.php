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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom_entreprise");
            $table->foreignId("pays_id")->nullable()->references('id')->on('pays');
            $table->string("site_web_entreprise")->nullable();
            $table->string("email");
            $table->string("indicatif_numero_telephone")->nullable();
            $table->string("telephone_entreprise_1")->nullable();
            $table->string("telephone_entreprise_2")->nullable();
            $table->string("nom_1");
            $table->string("prenom_1");
            $table->string("contact_1");
            $table->string("email_1");
            $table->string("nom_2")->nullable();
            $table->string("prenom_2")->nullable();
            $table->string("contact_2")->nullable();
            $table->string("email_2")->nullable();
            $table->string("nom_3")->nullable();
            $table->string("prenom_3")->nullable();
            $table->string("contact_3")->nullable();
            $table->string("email_3")->nullable();
            $table->string("domaine_activite");
            $table->longText("solution_1");
            $table->longText("description_solution_1");
            $table->longText("solution_2")->nullable();
            $table->longText("description_solution_2")->nullable();
            $table->longText("autre_solutions")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partenaires');
    }
};
