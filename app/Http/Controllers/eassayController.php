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
    	/*
    	if($request->hasFile('file')){
			$filename = $request->file->getClientOriginalName();
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
    	*/


    	$this->validate($request, [
    			'essayphoto' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
    			'user_id' => 'required'
    	]);
    	$image = $request->file('essayphoto');
    	$filesize = $image->getClientSize();
    	$user_id = $request->input('user_id');
    	$new_name = rand(). '.'.$image->getClientOriginalExtension();
    	$image->move(public_path("images"), $new_name);
    	$img_file = new Eassay;
    	$img_file->img_name = $new_name;
    	$img_file->size = $filesize;
    	$img_file->user_id = $user_id;
    	$img_file->save();
    	return back()->with('success', 'Uploaded Daily Essay Photo successfully')->with('path',$new_name);
	
    }

    public function mypicture(){
    	$mypictures = File::all();
    	return view('mypicture')->with('mypictures', $mypictures);
    }
}
