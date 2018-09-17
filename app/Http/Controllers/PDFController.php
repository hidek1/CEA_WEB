<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\PDF;
use App\User;
class PDFController extends Controller
{
     function showUploadFOrm($type){
      $users = User::all();
      if(substr($type, 0, 2) == 'of') {
        return view('official/dashboard_pdf', compact('users', 'type'));
      }
      return view('dashboard_pdf', compact('users', 'type'));
    }

    function storeFile(Request $request,  $type){
      // dd($type);
      $this->validate($request,[
          'file' => 'required|mimes:pdf|max:12222048',
      ]);

      if($request->hasFile('file')){
      $filename = time().'.'.request()->file->getClientOriginalExtension();
      $filesize = $request->file->getClientSize();
      $user_id = $request->input('user_id');
        // return $request->file->storeAs('public/upload',$filename);
        // $request->file->storeAs('public/upload',$filename);
      request()->file->move(public_path('pdfs'), $filename);
        $file = new PDF;
        $file->name =$filename;
        $file->size = $filesize;
        $file->user_id = $user_id;
        $file->type = $type;
        $file->save();
        return redirect()->action('PDFController@showUploadFOrm', ['type' => $type])->with("message", "Uploaded PDF successfully.");
      }
    }
}