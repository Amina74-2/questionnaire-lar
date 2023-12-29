<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
  
    protected $table = 'questionnaire'; // Make sure it matches the table name in the migration

    protected $fillable = [
        'ID_Patient',
        'Date_Questionnaire',
        'contentJSON',
        'totalScore',
        'status',
        'recommandations',
        // Add other fillable fields as needed
    ];

    // Add any additional model logic if necessary
}
