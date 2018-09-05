<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\User;
class FileController extends Controller
{
    function showUploadFOrm(){
    	$user = User::all();
    	return view('upload')->with('users',$user);
    	//return $request->all();
    }

    function storeFile(Request $request){
    	if($request->hasFile('file')){
			$filename = time().'.'.request()->file->getClientOriginalExtension();
			$filesize = $request->file->getClientSize();
			$user_id = $request->input('user_id');
    		//return $request->file->storeAs('public/upload',$filename);
    		$request->file->storeAs('public/upload',$filename);
    		$file = new File;
    		$file->name =$filename;
    		$file->size = $filesize;
    		$file->user_id = $user_id;
    		$file->save();
    		return redirect('file')->with("message", "Uploaded image successfully.");
    	}
    }

    public function mypicture(){
    	$mypictures = File::all();
    	return view('mypicture')->with('mypictures', $mypictures);
    }
}
