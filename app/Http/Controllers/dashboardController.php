<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegiAgency;
use App\Contact;
class dashboardController extends Controller
{

	public function index(){
		return view('/dashboardhome');
	}
    public function agencylist(){
    	$angencylist = RegiAgency::all();
    	return view('dashboardagencylist')->with("angencylist", $angencylist);
    }

    public function contactlist(){
    	$contactlist = Contact::all();
    	return view('/dashboardcontactslist')->with('contactlist', $contactlist);
    	
    }
    

}
