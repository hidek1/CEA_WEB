<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Eassay;
class eassayController extends Controller
{
     function showUploadFOrm(){
    	$user = User::all();
    	return view('eassay_img')->with('users',$user);
    	//return $request->all();
    }

    function storeFile(Request $request){
    	$this->validate($request,[
    			'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    	]);

    	if($request->hasFile('file')){
			$filename = time().'.'.request()->file->getClientOriginalExtension();
			$filesize = $request->file->getClientSize();
			$user_id = $request->input('user_id');
    		//return $request->file->storeAs('public/upload',$filename);
    		$request->file->storeAs('public/upload',$filename);
    		$file = new Eassay;
    		$file->img_name =$filename;
    		$file->size = $filesize;
    		$file->user_id = $user_id;
    		$file->save();
            return redirect('/eassayphoto')->with("message", "Uploaded Daily Essay Photo successfully.");
    	}
    }

    public function mypicture(){
    	$mypictures = File::all();
    	return view('mypicture')->with('mypictures', $mypictures);
    }
}
