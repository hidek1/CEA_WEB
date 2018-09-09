<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests\SurveyRequest;
use App\Http\Controllers\Controller;
use App\Survey;
use App\User;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    public function index()
    {
        $scores = Survey::$scores;
        $user_id = Auth::user()->id;
        return view('index_student_survey', compact('scores','user_id'));
    }

    public function complete(SurveyRequest $request)
    {   
        Survey::create($request->all());
        $request->session()->regenerateToken();
        return view('index_student_survey_complete');
    }
}
