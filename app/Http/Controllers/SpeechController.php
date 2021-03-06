<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Speech;
use Illuminate\Support\Facades\Auth;
class SpeechController extends Controller
{
     function showUploadFOrm($type){
      $users = User::all();
      if(substr($type, 0, 2) == 'of') {
        return view('official/dashboard_speech', compact('users', 'type'));
      }
      return view('dashboard_speech', compact('users', 'type'));
    }

    function storeFile(Request $request,  $type){
      // dd($type);
      $this->validate($request,[
          'file' => 'required|mimes:mp4,qt,x-ms-wmv,mpeg,x-msvideo|max:12222048',
      ]);

      if($request->hasFile('file')){
      $filename = time().'.'.request()->file->getClientOriginalExtension();
      $filesize = $request->file->getClientSize();
      $user_id = $request->input('user_id');
        // return $request->file->storeAs('public/upload',$filename);
        // $request->file->storeAs('public/upload',$filename);
      request()->file->move(public_path('community_videos'), $filename);
        $file = new Speech;
        $file->name =$filename;
        $file->size = $filesize;
        $file->user_id = $user_id;
        $file->type = $type;
        $file->save();
        return redirect()->action('SpeechController@showUploadFOrm', ['type' => $type])->with("message", "Uploaded Speech successfully.");
      }
    }

    function showVideos(){
      $id = Auth::user()->id;
      $speeches = Speech::where('user_id',$id)->get();
      return view('official/videos', compact('speeches'));
    }
}