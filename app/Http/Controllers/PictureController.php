<?php
/*
    Author: Daryl Bargamento
    Date Created: August 25 2018
    
*/
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Picture;
use App\User;
class PictureController extends Controller
{



    function showUploadFOrm($type){
    	$users = User::all();
        if ($type == 'official'){
    	   return view('official/picture', compact('users','type'));
        }
        return view('upload', compact('users','type'));
    	//return $request->all();
    }

    function storeFile(Request $request,  $type){
    	
    	$this->validate($request, [
    			'file' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
    			'user_id' => 'required'
    	]);
    	$image = $request->file('file');
    	$filesize = $image->getClientSize();
    	$user_id = $request->input('user_id');
    	$new_name = rand(). '.'.$image->getClientOriginalExtension();
    	$image->move(public_path("upload_pictures"), $new_name);
    	$img_file = new Picture;
    	$img_file->name = $new_name;
    	$img_file->size = $filesize;
    	$img_file->user_id = $user_id;
        $file->type = $type;
    	$img_file->save();
    	return back()->with('success', 'Image Uploaded successfully')->with('path',$new_name);
    }

}
