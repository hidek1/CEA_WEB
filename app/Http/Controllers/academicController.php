<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Post;
use App\Academic;
use App\User;
class academicController extends Controller
{
 	public function getAcademic(){
    	$user = User::all();
    	return view('academic')->with('user', $user);
    }

    public function postAcademic(Request $request){
    	$this->validate($request,[
    		'change_issue' => 'required',
    		'reason' => 'required|min:10',
    		'subject' => 'required'
    	]);

    	$subject = $request->input('subject');
    	$emailfrom = $request->input('email');
    	$reason = $request->input('reason');
    	$name = $request->input('name');
    	$user_id = $request->input('user_id');
    	$change_issue = $request->input('change_issue');
    	
    	
    	$academic = new Academic;
    	$academic->user_id = $user_id;
    	$academic->emailto = 'info@cea.asia';
    	$academic->fromemail = $emailfrom;
    	$academic->reason = $reason;
    	$academic->name = $name;
    	$academic->issue_change = $change_issue;
    	$academic->save();

    	$data = array(
    			'email' => $request->email,
    			'reason' => $request->reason,
    			'subject' => $request->subject,
    			'change_issue' => $request->change_issue 
    			
    	);

    	Mail::send('emails.academic', $data, function($message) use ($data){
    		$message->to($data['email']);
            $message->sender($data['email']);
    		$message->subject($data['subject']);
    	});
    	return redirect('/official-home')->with('success', 'Your Academic Form was sent');
    }

}
