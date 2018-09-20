<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Post;
use App\Travel;

class travelController extends Controller
{
    public function getTravel(){
    	$user = User::all();
    	return view('travelform')->with('user', $user);
    }

    public function postTravel(Request $request){
    	$this->validate($request,[
    		'start_date' => 'required',
    		'end_date' => 'required',
    		'reason' => 'required|min:10',
    		'subject' => 'required'
    	]);

    	$subject = $request->input('subject');
    	$emailfrom = $request->input('email');
    	$reason = $request->input('reason');
    	$name = $request->input('name');
    	$user_id = $request->input('user_id');
    	$start_date = $request->input('start_date');
    	$end_date = $request->input('end_date');
    	
    	$travel = new Travel;
    	$travel->user_id = $user_id;
    	$travel->emailto = 'info@cea.asia';
    	$travel->fromemail = $emailfrom;
    	$travel->reason = $reason;
    	$travel->name = $name;
    	$travel->subject = $subject;
    	$travel->travel_start_date = $start_date;
    	$travel->travel_end_date = $end_date;
    	$travel->save();

    	$data = array(
    			'email' => $request->email,
    			'reason' => $request->reason,
    			'subject' => $request->subject,
    			'start_date' => $request->start_date,
    			'end_date' => $request->end_date
    			
    	);

    	Mail::send('emails.travel', $data, function($message) use ($data){
    		$message->from($data['email']);
    		$message->to('darylb2k11@gmail.com');
    		$message->subject($data['subject']);
    	});
    	return redirect('/ceaofficial')->with('success', 'Your Travel Form was sent');
    }
}
