<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\File;
use App\Eassay;
class CommunityController extends Controller
{
    public function index(Request $request)
    {    
        $id   = $request->session()->get('id');
		$photopictures = File::all();
		$essaydailyphoto = Eassay::all();
        //return view('index_community_members')->with(['photopictures' => $photopictures,  'essaydailyphoto' => $essaydailyphoto]);
        return view('index_community_members', compact('photopictures','essaydailyphoto'));
    }
}
