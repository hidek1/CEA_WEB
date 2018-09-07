<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class blogController extends Controller
{
     function index(){
        $blogs = Blog::all();
    	return view('blog')->with('blogs', $blogs);
    	//return $request->all();
    }
     /*
     function storeFile(Request $request){
    	$this->validate($request, [
    			'blog_img' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
    			'content' => 'required',
    			'title' => 'required'
    	]);
    	$blog_image = $request->file('blog_img');
    	$filesize = $blog_image->getClientSize();
    	$content = $request->input('content');
        $user_id = $request->input('user_id');
    	$title = $request->input('title');
    	$new_name = rand(). '.'.$blog_image->getClientOriginalExtension();
    	$blog_image->move(public_path("images/blog"), $new_name);
    	$blog = new Blog;
    	$blog->blog_img = $new_name;
    	$blog->size = $filesize;
    	$blog->content = $content;
    	$blog->title = $title;
        $blog->user_id = $user_id;
    	$blog->save();
    	return back()->with('success', 'Uploaded Blog successfully')->with('path',$new_name);
    }
    */
    function create(){
        $blogs = Blog::all();
        return view('addblog');
    }
    function store(Request $request){
        $this->validate($request, [
                'blog_img' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
                'content' => 'required',
                'title' => 'required'
        ]);
        $blog_image = $request->file('blog_img');
        $filesize = $blog_image->getClientSize();
        $content = $request->input('content');
        $user_id = $request->input('user_id');
        $title = $request->input('title');
        $new_name = rand(). '.'.$blog_image->getClientOriginalExtension();
        $blog_image->move(public_path("images/blog"), $new_name);
        $blog = new Blog;
        $blog->blog_img = $new_name;
        $blog->size = $filesize;
        $blog->content = $content;
        $blog->title = $title;
        $blog->user_id = $user_id;
        $blog->save();
        return back()->with('success', 'Uploaded Blog successfully')->with('path',$new_name);
    }
    function edit($id){
        $blog = Blog::find($id);
        return view('blogedit')->with('blog',$blog);
    }

    function update(Request $request, $id){
      $this->validate($request, [
                'blog_img' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
                'content' => 'required',
                'title' => 'required'
        ]);
        $blog_image = $request->file('blog_img');
        $filesize = $blog_image->getClientSize();
        $content = $request->input('content');
        $user_id = $request->input('user_id');
        $title = $request->input('title');
        $new_name = rand(). '.'.$blog_image->getClientOriginalExtension();
        $blog_image->move(public_path("images/blog"), $new_name);
        $blog = new Blog;
        $blog->blog_img = $new_name;
        $blog->size = $filesize;
        $blog->content = $content;
        $blog->title = $title;
        $blog->user_id = $user_id;
        $blog->save();
        return back()->with('success', 'Uploaded Blog successfully')->with('path',$new_name);
    }
    public function destroy($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog')->with('sucess', 'Successully Deleted');
    }
}
