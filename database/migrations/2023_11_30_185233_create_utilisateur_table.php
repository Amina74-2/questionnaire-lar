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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id('ID_Utilisateur')->autoIncrement();
            $table->string('Nom');
            $table->string('Prenom');
            $table->enum('Genre', ['Homme', 'Femme']);
            $table->date('Date_Naissance');
            $table->string('Adresse_Email');
            $table->string('Mot_de_passe');
            $table->string('Photo')->nullable();
            $table->enum('Role', ['Medecin', 'Patient']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateur');
    }
};
