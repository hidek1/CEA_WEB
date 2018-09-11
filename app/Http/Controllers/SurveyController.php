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

    public function edit($id) {
        $survey = Survey::findOrFail($id);
        $scores = Survey::$scores;
        return view('dashboard_student_survey_edit', compact('survey','scores'));
    }
 
    public function update(SurveyRequest $request, $id) {
        $survey = Survey::findOrFail($id);
        $survey->update($request->all());
        return redirect(url('dashboard_survey_list'));
    }

    public function destroy($id) {
        $survey = Survey::findOrFail($id);
        $survey->delete();
        return redirect('dashboard_survey_list');
    }
}
