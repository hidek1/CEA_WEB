<?php
/*
    Author: Daryl Bargamento
    Date Created: August 25 2018
    Purpose: Rquest Mail  Website
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Post; 
use App\User;
use App\requestForm;
use Session;
class mailController extends Controller
{
    public function getContact(){
    		//Mail::send(new requestMail());
    		$user = User::all();
    		return view('requestmail')->with('user',$user);
    }

    public function postContact(Request $request){
    	$this->validate($request,[
    			'email'=> 'required|email',
    			'requestroom'=> 'required',
    			'reason'=> 'required|min:10',
    			'subject' => 'required|min:3'
    	]);


    	$requestroom = $request->input('requestroom');
    	$subject = $request->input('subject');
    	$emailfrom = $request->input('email');
    	$reason = $request->input('reason');
    	$name = $request->input('name');
    	$user_id = $request->input('user_id');

    	$requestform = new requestForm;
    	$requestform->user_id = $user_id;
    	$requestform->issue = $requestroom;
    	$requestform->emailto = 'info@cea.asia';
    	$requestform->fromemail = $emailfrom;
    	$requestform->reason = $reason;
    	$requestform->name = $name;
    	$requestform->subject = $subject;
    	$requestform->save();

    	$data = array(
    			'email' => $request->email,
    			'requestroom' => $request->requestroom,
    			'reason' => $request->reason,
    			'subject' => $request->subject
    	);

    	Mail::send('emails.contact', $data, function($message) use ($data){
    		$message->to($data['email']);
            $message->sender($data['email']);
    		$message->subject($data['subject']);
    	});
    	
    	return redirect('/official-home')->with('success', 'Your Email was sent');
    }		
    
    public function edit($id){
        $requestform = requestForm::find($id);
        return $requestform;
    }
}
