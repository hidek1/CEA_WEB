<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class mystoryController extends Controller
{
 		function index(){
 			$table = DB::table('blogs')->get();
 			return $table;
 		}
}
