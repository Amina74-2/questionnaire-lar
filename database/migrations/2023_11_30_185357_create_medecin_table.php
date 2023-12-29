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
        Schema::create('medecin', function (Blueprint $table) {
            $table->id('ID_Medecin')->autoIncrement();
            $table->unsignedBigInteger('ID_Utilisateur');
            $table->foreign('ID_Utilisateur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->string('Specialite');
            $table->integer('Sessions_Therapie_Planifiees');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecin');
    }
};
