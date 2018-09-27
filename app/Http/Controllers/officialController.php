<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class officialController extends Controller
{
    function index(){
    	return view('official.home');
    }

    function ceaDashboard(){
    	return view('officialdashboard');
    }
}
