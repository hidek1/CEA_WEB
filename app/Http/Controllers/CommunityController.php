<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {    
        $id   = $request->session()->get('id');
        return view('index_community_members');
    }
}
