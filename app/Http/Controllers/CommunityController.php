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
    $speech = Eassay::where('user_id',$id)->first();
        //return view('index_community_members')->with(['photopictures' => $photopictures,  'essaydailyphoto' => $essaydailyphoto]);
        return view('index_community_members', compact('photopictures','essaydailyphoto','speech'));
    }
}
