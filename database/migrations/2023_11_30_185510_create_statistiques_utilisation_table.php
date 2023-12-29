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
        Schema::create('statistiques_utilisation', function (Blueprint $table) {
            $table->id('ID_Statistique');
            $table->unsignedBigInteger('ID_Utilisateur');
            $table->foreign('ID_Utilisateur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->date('Date_Statistique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistiques_utilisation');
    }
};
