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
          ->paginate(5);
        $experiences = User::join('experiences', 'experiences.user_id', '=', 'users.id')->where('type',3)
        					->paginate(5);
      return view('index_home', compact('blogs', 'experiences'));
    } 
}