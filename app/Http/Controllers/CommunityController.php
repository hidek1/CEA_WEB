<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\File;
use App\Eassay;
use App\Speech;
use Auth;
class CommunityController extends Controller
{
    public function index(Request $request)
    {    
        $id = Auth::id();
    		$photopictures = File::all();
    		$essaydailyphoto = Eassay::all();
        if (Speech::where('user_id',$id)->orderBy('created_at', 'desc')->first()) {
          $speech = Speech::where('user_id',$id)->orderBy('created_at', 'desc')->first();
        } else {
          $speech = null;
        }
        //return view('index_community_members')->with(['photopictures' => $photopictures,  'essaydailyphoto' => $essaydailyphoto]);
        return view('index_community_members', compact('photopictures','essaydailyphoto','speech'));
    }
}
