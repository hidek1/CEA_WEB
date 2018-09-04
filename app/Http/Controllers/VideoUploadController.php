<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoUploadController extends Controller
{
     /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function videoUpload()

    {

        return view('videoUpload');

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function videoUploadPost()
    {
        request()->validate([
            'video' => 'required|mimes:mp4,qt,x-ms-wmv,mpeg,x-msvideo|max:12222048',
        ]);
        $videoName = time().'.'.request()->video->getClientOriginalExtension();
        request()->video->move(public_path('videos'), $videoName);
        return back()
            ->with('success','You have successfully upload video.')
            ->with('video',$videoName);
    }
}