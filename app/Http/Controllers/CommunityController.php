<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\File;
use App\Eassay;
use App\Speech;
use App\PDF;
use Auth;
class CommunityController extends Controller
{
    public function index(Request $request)
    {    
        $id = Auth::id();
    		$photopictures = File::all();
    		$essaydailyphoto = Eassay::all();
        if (Speech::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','first')->first()) {
          $first_speech = Speech::where('user_id',$id)->where('type','first')->orderBy('created_at', 'desc')->first();
        } else {
          $first_speech = null;
        }
        if (Speech::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','graduation')->first()) {
          $graduation_speech = Speech::where('user_id',$id)->where('type','graduation')->orderBy('created_at', 'desc')->first();
        } else {
          $graduation_speech = null;
        }
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','result')->first()) {
          $result_pdf = PDF::where('user_id',$id)->where('type','result')->orderBy('created_at', 'desc')->first();
        } else {
          $result_pdf = null;
        }
        if (PDF::where('user_id',$id)->orderBy('created_at', 'desc')->where('type','graduation')->first()) {
          $graduation_pdf = PDF::where('user_id',$id)->where('type','graduation')->orderBy('created_at', 'desc')->first();
        } else {
          $graduation_pdf = null;
        }
        //return view('index_community_members')->with(['photopictures' => $photopictures,  'essaydailyphoto' => $essaydailyphoto]);
        return view('index_community_members', compact('photopictures','essaydailyphoto','first_speech','graduation_speech','result_pdf','graduation_pdf'));
    }
}
