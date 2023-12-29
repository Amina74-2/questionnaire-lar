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
        Schema::create('message', function (Blueprint $table) {
            $table->id('ID_Message');
            $table->unsignedBigInteger('ID_Expéditeur');
            $table->unsignedBigInteger('ID_Destinataire');
            $table->foreign('ID_Expéditeur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->foreign('ID_Destinataire')->references('ID_Utilisateur')->on('Utilisateur');
            $table->text('Contenu_Message');
            $table->dateTime('Date_Envoi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message');
    }
};
