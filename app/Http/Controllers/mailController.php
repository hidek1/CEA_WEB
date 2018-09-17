<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Post; 
use User;
use Session;
class mailController extends Controller
{
    public function getContact(){

    		//Mail::send(new requestMail());
    		//https://www.youtube.com/watch?v=xginpIk1IJw
    		return view('requestmail');
    }

    public function postContact(Request $request){
    	$this->validate($request,[
    			'email'=> 'required|email',
    			'requestroom'=> 'required',
    			'reason'=> 'required|min:10',
    			'subject' => 'required|min:3'
    	]);

    	$data = array(
    			'email' => $request->email,
    			'requestroom' => $request->requestroom,
    			'reason' => $request->reason,
    			'subject' => $request->subject
    	);

    	Mail::send('emails.contact', $data, function($message) use ($data){
    		$message->from($data['email']);
    		$message->to('info@cea.asia');
    		$message->subject($data['subject']);
    	});
    	
    	return redirect('/ceaofficial')->with('success', 'Your Email was sent');
    }		
    
}
