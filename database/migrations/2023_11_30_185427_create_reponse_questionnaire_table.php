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
        Schema::create('reponse_questionnaire', function (Blueprint $table) {
            $table->id('ID_Reponse');
            $table->unsignedBigInteger('ID_Questionnaire');
            $table->foreign('ID_Questionnaire')->references('ID_Questionnaire')->on('Questionnaire');
            $table->unsignedBigInteger('ID_Question');
            $table->foreign('ID_Question')->references('ID_Question')->on('Question');
            $table->string('Reponse');
            $table->integer('Score');
            $table->text('Commentaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponse_questionnaire');
    }
};
