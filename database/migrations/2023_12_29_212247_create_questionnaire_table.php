<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire', function (Blueprint $table) {
            $table->id('ID_Questionnaire');
            $table->unsignedBigInteger('ID_Patient');
            $table->foreign('ID_Patient')->references('ID_Patient')->on('patient');
            $table->datetime('Date_Questionnaire');
            $table->json('contentJSON'); 
            $table->float('totalScore');
            $table->string('status');
            $table->text('recommandations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaire');
    }
}