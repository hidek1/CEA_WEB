<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class FaceController extends Controller {
    public function index(){
        $blogs = DB::table('blogs')
          ->orderBy('created_at', 'DESC')
          ->take(5)
          ->get();
        $experiences = User::join('experiences', 'experiences.user_id', '=', 'users.id')->get();
      return view('index_home', compact('blogs', 'experiences'));
    } 
}