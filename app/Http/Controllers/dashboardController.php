<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegiAgency;
use App\Contact;
use App\User;
use App\experience;
class DashboardController extends Controller
{
	public function index(){
		return view('/dashboard_home');
	}

    public function userlist(){
        $userlist = User::paginate(2);
        return view('dashboard_user_list')->with("userlist", $userlist);
    }

    public function agencylist(){
    	$angencylist = RegiAgency::paginate(1);
    	return view('dashboard_registration_agency_list')->with("angencylist", $angencylist);
    }

    public function contactlist(){
    	$contactlist = Contact::paginate(1);
    	return view('/dashboard_contact_list')->with('contactlist', $contactlist);
    }
    
    public function surveylist()
    {
        $surveylist = User::join('surveys', 'surveys.user_id', '=', 'users.id')->get();
        return view('dashboard_student_survey_list', compact('surveylist'));
    }

    public function experiencelist()
    {
        $experiencelist = User::join('experiences', 'experiences.user_id', '=', 'users.id')->get();
        return view('dashboard_experience_list', compact('experiencelist'));
    }
}
