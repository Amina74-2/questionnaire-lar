<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Questionnaire;
use Carbon\Carbon;

class QuestionnaireController extends Controller
{
    public function store(Request $request)
    {
        try {
            Log::info($request->all());

            $data = $request->validate([
                'ID_Patient' => 'required|exists:patient,ID_Patient',
                'Date_Questionnaire' => 'required|date',
                'contentJSON' => 'required|json',
                'totalScore' => 'required|numeric',
                'status' => 'nullable|string',
                'recommandations' => 'nullable|string',
            ]);
            
            
          
            // Convert 'Date_Questionnaire' to the correct datetime format
            $data['Date_Questionnaire'] = Carbon::parse($data['Date_Questionnaire'])->format('Y-m-d H:i:s');

            $questionnaire = new Questionnaire($data);
            $questionnaire->save();

            return response()->json(['message' => 'Questionnaire data saved successfully']);
        } catch (\Exception $e) {
            Log::error('Error saving questionnaire data: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}

