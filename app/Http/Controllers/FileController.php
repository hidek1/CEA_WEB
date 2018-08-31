<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Contact;
class FileController extends Controller
{
    function showUploadFOrm(){
    	$contact = Contact::all();
    	return view('upload')->with('contacts',$contact);
    	//return $request->all();
    }

    function storeFile(Request $request){
    	if($request->hasFile('file')){
			
			$filename = $request->file->getClientOriginalName();
			$filesize = $request->file->getClientSize();
			$contact_id = $request->input('contact_id');
    		//return $request->file->storeAs('public/upload',$filename);
    		$request->file->storeAs('public/upload',$filename);
    		$file = new File;
    		$file->name =$filename;
    		$file->size = $filesize;
    		$file->contact_id = $contact_id;
    		$file->save();
    		return redirect('file')->with("message", "Updated");
    	}
    }

    public function mypicture(){
    	$mypictures = File::all();
    	return view('mypicture')->with('mypictures', $mypictures);

    }
}
