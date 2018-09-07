<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests\SurveyRequest;
use App\Http\Controllers\Controller;
use App\Survey;

class SurveyController extends Controller
{
    public function index()
    {
        $classes = Survey::$classes;

        return view('index_student_survey', compact('classes'));
    }
}
