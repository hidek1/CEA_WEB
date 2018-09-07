<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegiAgency;
use App\Contact;
use App\User;
class dashboardController extends Controller
{

	public function index(){
		return view('/dashboard_home');
	}

    public function userlist(){
        $userlist = User::all();
        return view('dashboard_user_list')->with("userlist", $userlist);
    }

    public function agencylist(){
    	$angencylist = RegiAgency::all();
    	return view('dashboard_registration_agency_list')->with("angencylist", $angencylist);
    }

    public function contactlist(){
    	$contactlist = Contact::all();
    	return view('/dashboard_contact_list')->with('contactlist', $contactlist);
    	
    }
    
   

}
