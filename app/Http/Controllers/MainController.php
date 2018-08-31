<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;
class MainController extends Controller
{
    function index(){
    	return view('login');
    }

    function checklogin(Request $request){
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|alphaNum|min:3'
            
    	]);

    	$user_data = array(
    		'email' => $request->get('email'),
    		'password' => $request->get('password')
    	);
    	if(Auth::attempt($user_data)){
            $userdata = Auth::user();
            $sessionId = 'id';
            Session::put($sessionId, $userdata);
    		return redirect('/index_community_members');
    	}
    	else{
    		return back()->with('error', 'Invalid/ incorrect username and password');
    	}
    }

    function successlogin(){
    	return view('successlogin');
    }

    function logout(){
    	Auth::logout();
    	return redirect('main');
    }

}
