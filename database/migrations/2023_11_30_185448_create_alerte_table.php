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
        Schema::create('alerte', function (Blueprint $table) {
            $table->id('ID_Alerte');
            $table->unsignedBigInteger('ID_Patient');
            $table->foreign('ID_Patient')->references('ID_Patient')->on('Patient');
            $table->date('Date_Alerte');
            $table->string('Type_Alerte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerte');
    }
};
