<?php
/*
    Author: Daryl Bargamento
    Date Created: August 25 2018
    
*/
namespace App\Http\Controllers;
use DB;
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
    	/*
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
    	*/
    	
    	$this->validate($request, [
    			'file' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
    			'user_id' => 'required'
    	]);
    	$image = $request->file('file');
    	$filesize = $image->getClientSize();
    	$user_id = $request->input('user_id');
    	$new_name = rand(). '.'.$image->getClientOriginalExtension();
    	$image->move(public_path("images"), $new_name);
    	$img_file = new File;
    	$img_file->name = $new_name;
    	$img_file->size = $filesize;
    	$img_file->user_id = $user_id;
    	$img_file->save();
    	return back()->with('success', 'Image Uploaded successfully')->with('path',$new_name);
    }

    public function mypicture(){
    	$mypictures = File::all();
    	return view('mypicture')->with('mypictures', $mypictures);
    }
    /*
    public function innerjoin(){
        $my_picture = DB::table("users")
                    ->join("files", "users.id", "=", "files.user_id")
                    ->select()
                    ->get();
        return $my_picture;
    }
    */
}
