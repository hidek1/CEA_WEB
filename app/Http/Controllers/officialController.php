<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\File;
use App\Speech;
use App\PDF;
use Auth;
class OfficialController extends Controller
{
    public function index(Request $request)
    {    
        $id = Auth::id();
        $photopictures = File::all();
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','of_entrance')->first()) {
          $entrance = PDF::where('user_id',$id)->where('type','of_entrance')->orderBy('created_at', 'desc')->first();
        } else {
          $entrance = null;
        }
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','of_chart')->first()) {
          $chart = PDF::where('user_id',$id)->where('type','of_chart')->orderBy('created_at', 'desc')->first();
        } else {
          $chart = null;
        }
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','of_result')->first()) {
          $result = PDF::where('user_id',$id)->where('type','of_result')->orderBy('created_at', 'desc')->first();
        } else {
          $result = null;
        }
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','of_evaluation')->first()) {
          $evaluation = PDF::where('user_id',$id)->where('type','of_evaluation')->orderBy('created_at', 'desc')->first();
        } else {
          $evaluation = null;
        }
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','of_graduation')->first()) {
          $graduation = PDF::where('user_id',$id)->where('type','of_graduation')->orderBy('created_at', 'desc')->first();
        } else {
          $graduation = null;
        }
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','of_class')->first()) {
          $class = PDF::where('user_id',$id)->where('type','of_class')->orderBy('created_at', 'desc')->first();
        } else {
          $class = null;
        }
        if (Speech::where('user_id',$id)->orderBy('created_at', 'desc')->first()) {
          $latest_speech = Speech::where('user_id',$id)->orderBy('created_at', 'desc')->first();
        } else {
          $latest_speech = null;
        }
        //return view('index_community_members')->with(['photopictures' => $photopictures,  'essaydailyphoto' => $essaydailyphoto]);
        return view('official/home', compact('entrance','chart','result','evaluation','graduation', 'class', 'latest_speech','photopictures'));
    }

    function dashboard(){
      return view('officialdashboard');
    }
}