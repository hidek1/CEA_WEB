<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contact;
class contactController extends Controller
{
	 public function index()  {

        $contacts = Contact::paginate(3);
        return view("/contact")->with('contacts',$contacts);
        
    }
       public function store(Request $request){
            
          $validator =  Validator::make($request->all(),[
            	'name' => 'required|min:5|max:20',
            	'email' => 'required|email',
            	'type' => 'required|min:5|max:20',
            	'body' => 'required|min:10|max:300'
            ]);
          if($validator->fails()){
          	return back()->withErrors($validator)->withInput();
          }


            $contact = new Contact;
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->type = $request->input('type');
            $contact->body = $request->input('body');
        	$contact->save();
        	
        	return redirect('index_home')->with("message", "Contact added Successfully");
      	
       }

       public function create(){
            return view('addcontactform');
       }

       public function show($id){
            $contacts = Contact::all();
       }

       public function edit($id){
            $contact = Contact::find($id);
            return view('editcontactform')->with('contact', $contact);

       }

       public function update(Request $request, $id){
            $contact = Contact::find($id);
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->type = $request->type;
            $contact->body = $request->body;
            $contact->save();
            return redirect('contact')->with("message", "Updated");
       }

       public function destroy($id){
       		Contact::destroy($id);
       		return redirect('contact')->with("message", "Contact record successfully Deleted");
       }
}
