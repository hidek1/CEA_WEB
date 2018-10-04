<?php
/*
    Author: Daryl Bargamento
    Date Created: August 25 2018
    Purpose: Adding blogs Website
*/
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Blog;
class blogController extends Controller
{
     function index(){
        $blogs = DB::table('users')
                    ->join('blogs', 'users.id', '=', 'blogs.user_id')
                    ->select('users.name', 'blogs.title', 'blogs.content', 'blogs.id')->get();
                    
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
                'title' => 'required',
                'sub_img1' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
                'sub_img2' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
                'sub_img3' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
                'sub_img4' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
                'sub_img5' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $blog_image = $request->file('blog_img');
        $filesize = $blog_image->getClientSize();
        $content = $request->input('content');
        $user_id = $request->input('user_id');
        $title = $request->input('title');
        $new_name = rand(). '.'.$blog_image->getClientOriginalExtension();
        $blog_image->move(public_path("images/blog"), $new_name);

        
        $blog_image1 = $request->file('sub_img1');
        $subcontent1 = $request->input('subcontent1');
        $sub_title1 = $request->input('sub_title1');
        if ($blog_image1 != null) {
            $new_name1 = rand(). '.'.$blog_image1->getClientOriginalExtension();
            $blog_image1->move(public_path("images/blog"), $new_name1);
        } else {
            $new_name1 = '';
        }

        $blog_image2 = $request->file('sub_img2');
        $subcontent2 = $request->input('subcontent2');
        $sub_title2 = $request->input('sub_title2');
         if ($blog_image2 != null) {
            $new_name2 = rand(). '.'.$blog_image2->getClientOriginalExtension();
            $blog_image2->move(public_path("images/blog"), $new_name2);
        } else {
            $new_name2 = '';
        }
        
        $blog_image3 = $request->file('sub_img3');
        $subcontent3 = $request->input('subcontent3');
        $sub_title3 = $request->input('sub_title3');
        if ($blog_image3 != null) {
            $new_name3 = rand(). '.'.$blog_image3->getClientOriginalExtension();
            $blog_image3->move(public_path("images/blog"), $new_name3);
        } else {
            $new_name3 = '';
        }

        $blog_image4 = $request->file('sub_img4');
        $subcontent4 = $request->input('subcontent4');
        $sub_title4 = $request->input('sub_title4');
        if ($blog_image4 != null) {
            $new_name4 = rand(). '.'.$blog_image2->getClientOriginalExtension();
            $blog_image4->move(public_path("images/blog"), $new_name4);
        } else {
            $new_name4 = '';
        }

        $blog_image5 = $request->file('sub_img5');
        $subcontent5 = $request->input('subcontent5');
        $sub_title5 = $request->input('sub_title5');
        if ($blog_image5 != null) {
            $new_name5 = rand(). '.'.$blog_image5->getClientOriginalExtension();
            $blog_image5->move(public_path("images/blog"), $new_name5);
        } else {
            $new_name5 = '';
        }
        
    
        $blog = new Blog;
        $blog->blog_img = $new_name;
        $blog->size = $filesize;
        $blog->content = $content;
        $blog->title = $title;
        $blog->user_id = $user_id;
        
        $blog->subimg1 = $new_name1;
        $blog->subcontent1 = $subcontent1;
        $blog->subtile1 = $sub_title1;
        
        $blog->subimg2 = $new_name2;
        $blog->subcontent2 = $subcontent2;
        $blog->subtile2 = $sub_title2;
        
        $blog->subimg3 = $new_name3;
        $blog->subcontent3 = $subcontent3;
        $blog->subtile3 = $sub_title3;

        $blog->subimg4 = $new_name4;
        $blog->subcontent4 = $subcontent4;
        $blog->subtile4 = $sub_title4;

        $blog->subimg5 = $new_name5;
        $blog->subcontent5 = $subcontent5;
        $blog->subtile5 = $sub_title5;

        $blog->save();
        return back()->with('success', 'Blog Uploaded successfully')->with('path',$new_name);
        
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
        if($blog_image != NULL){
            $new_name = rand().'.'.$blog_image->getClientOriginalExtension();
            $blog_image->move(public_path("images/blog"), $new_name);
        }
        else{
            $new_name = NULL;
            $filesize = 1;
        }

        
        $blog_image1 = $request->file('sub_img1');
        $subcontent1 = $request->input('subcontent1');
        $sub_title1 = $request->input('sub_title1');
        if($blog_image1 != NULL){
            $new_name1 = rand(). '.'.$blog_image1->getClientOriginalExtension();
            $blog_image1->move(public_path("images/blog"), $new_name1);
        }
        else{
            $new_name1 = NULL;

        }
        
        $blog_image2 = $request->file('sub_img2');
        $subcontent2 = $request->input('subcontent2');
        $sub_title2 = $request->input('sub_title2');
        if($blog_image2 != ''){
            $new_name2 = rand(). '.'.$blog_image2->getClientOriginalExtension();
            $blog_image2->move(public_path("images/blog"), $new_name2);
        }
        else{
            $new_name2 = '';
        }
        
        
        $blog_image3 = $request->file('sub_img3');
        $subcontent3 = $request->input('subcontent3');
        $sub_title3 = $request->input('sub_title3');
        if($blog_image3 != ''){
            $new_name3 = rand(). '.'.$blog_image3->getClientOriginalExtension();
            $blog_image3->move(public_path("images/blog"), $new_name3);
        }
        else{
            $new_name3 = '';
        }
        

        $blog_image4 = $request->file('sub_img4');
        $subcontent4 = $request->input('subcontent4');
        $sub_title4 = $request->input('sub_title4');
        if($blog_image4 != ''){
            $new_name4 = rand(). '.'.$blog_image2->getClientOriginalExtension();
            $blog_image4->move(public_path("images/blog"), $new_name4);
        }
        else{
            $new_name4 = '';
        }
        

        $blog_image5 = $request->file('sub_img5');
        $subcontent5 = $request->input('subcontent5');
        $sub_title5 = $request->input('sub_title5');
        if($blog_image5 != ''){
            $new_name5 = rand(). '.'.$blog_image5->getClientOriginalExtension();
            $blog_image5->move(public_path("images/blog"), $new_name5);
        }
        else{
            $new_name5 = '';
        }
        

        $blog = new Blog;
        $blog->blog_img = $new_name;
        $blog->size = $filesize;
        $blog->content = $content;
        $blog->title = $title;
        $blog->user_id = $user_id;

        
        $blog->subimg1 = $new_name1;
        $blog->subcontent1 = $subcontent1;
        $blog->subtile1 = $sub_title1;

        $blog->subimg2 = $new_name2;
        $blog->subcontent2 = $subcontent2;
        $blog->subtile2 = $sub_title2;

        $blog->subimg3 = $new_name3;
        $blog->subcontent3 = $subcontent3;
        $blog->subtile3 = $sub_title3;

        $blog->subimg4 = $new_name4;
        $blog->subcontent4 = $subcontent4;
        $blog->subtile4 = $sub_title4;

        $blog->subimg5 = $new_name5;
        $blog->subcontent5 = $subcontent5;
        $blog->subtile5 = $sub_title5;
        
        $blog->save();
        return back()->with('success', 'Blog Updated Successfully!')->with('path',$new_name);
    }
    public function destroy(Request $request, $id){
        /*
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog')->with('sucess', 'Successully Deleted');
        */
        $blog = Blog::findOrFail($request->blog_id);
        $blog->delete();
        return back()->with('success', 'Your record was deleted successfully');
    }

    public function listallblog($id){
        $bloglists = DB::table('users')
                     ->join('blogs', 'users.id', '=', 'blogs.user_id')
                     ->select('users.id','users.name','blogs.blog_img', 'blogs.title', 'blogs.content', 'blogs.created_at',
                        'blogs.subtile1',
                        'blogs.subtile2',
                        'blogs.subtile3',
                        'blogs.subtile4',
                        'blogs.subtile5',
                        'blogs.subcontent1',
                        'blogs.subcontent2',
                        'blogs.subcontent3',
                        'blogs.subcontent4',
                        'blogs.subcontent5',
                        'blogs.subcontent1',
                        'blogs.subimg1',
                        'blogs.subimg2',
                        'blogs.subimg3',
                        'blogs.subimg4',
                        'blogs.subimg5')
                     ->where('blogs.id', '=', $id)
                     ->get();
        return view('blogall')->with('bloglists',$bloglists);
    }

}
