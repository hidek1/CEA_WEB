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

    public function userlist($type){
        if ($type == "camp") {
            $userlist = User::where('type',3)->get();
            return view('dashboard_user_list')->with("userlist", $userlist);
        }
        $userlist = User::where('type',4)->get();
        return view('official/dashboard_user_list')->with("userlist", $userlist);
    }

    public function agencylist(){
    	$angencylist = RegiAgency::all();
    	return view('dashboard_registration_agency_list')->with("angencylist", $angencylist);
    }

    public function contactlist(){
    	$contactlist = Contact::all();
    	return view('/dashboard_contact_list')->with('contactlist', $contactlist);
    }
    
    public function surveylist()
    {
        $surveylist = User::join('surveys', 'surveys.user_id', '=', 'users.id')->paginate(5);
        return view('dashboard_student_survey_list', compact('surveylist'));
    }

    public function bloglist()
    {
        $blogs = User::join('blogs', 'blogs.user_id', '=', 'users.id')->paginate(5);
        return view('dashboard_blog_list', compact('blogs'));
    }

    public function experiencelist($type)
    {
        if ($type == "camp") {
            $experiencelist = User::join('experiences', 'experiences.user_id', '=', 'users.id')->where('type',3)->get();
            return view('dashboard_experience_list', compact('experiencelist'));
        }
        $experiencelist = User::join('experiences', 'experiences.user_id', '=', 'users.id')->where('type',4)->get();
        return view('official/dashboard_experience_list')->with("experiencelist", $experiencelist);
    }

    
}


