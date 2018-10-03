<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Post;
use App\User;
use App\Absent;
class absentController extends Controller
{
    public function getForm(){
    		//Mail::send(new requestMail());
    		$user = User::all();
    		return view('absentform')->with('user',$user);
    }

    public function postForm(Request $request){
    	
    	$this->validate($request,[
    			'email'=> 'required|email',
    			'absentdate'=> 'required',
    			'subject' => 'required',
    			'reason'=> 'required|min:10'
    			
    	]);
    	
    	$subject = $request->input('subject');
    	$emailfrom = $request->input('email');
    	$reason = $request->input('reason');
    	$name = $request->input('name');
    	$user_id = $request->input('user_id');
    	$absentdate = $request->input('absentdate');
    	
    	$absent = new Absent;
    	$absent->user_id = $user_id;
    	$absent->date_absent = $absentdate;
    	$absent->emailto = 'info@cea.asia';
    	$absent->fromemail = $emailfrom;
    	$absent->reason = $reason;
    	$absent->name = $name;
    	$absent->subject = $subject;
    	$absent->save();

    	$data = array(
    			'email' => $request->email,
    			'reason' => $request->reason,
    			'subject' => $request->subject,
    			'absent' => $request->absentdate
    	);

    	Mail::send('emails.absent', $data, function($message) use ($data){
    		$message->from($data['email']);
    		$message->to($data['email']);
            $message->sender($data['email']);
    		$message->subject($data['subject']);
    	});
    	
    	return redirect('/official-home')->with('success', 'Your Absent Form was sent');
    	
    }	
}
