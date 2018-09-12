<?php

namespace App\Http\Controllers;
use DB;
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

        
        $blog_image1 = $request->file('sub_img1');
        $filesize = $blog_image->getClientSize();
        $subcontent1 = $request->input('subcontent1');
        $sub_title1 = $request->input('sub_title1');
        $new_name1 = rand(). '.'.$blog_image1->getClientOriginalExtension();
        $blog_image1->move(public_path("images/blog"), $new_name1);
        

        $blog_image2 = $request->file('sub_img2');
        $filesize = $blog_image->getClientSize();
        $subcontent2 = $request->input('subcontent2');
        $sub_title2 = $request->input('sub_title2');
        $new_name2 = rand(). '.'.$blog_image2->getClientOriginalExtension();
        $blog_image2->move(public_path("images/blog"), $new_name2);
        
        
        $blog_image3 = $request->file('sub_img3');
        $filesize = $blog_image->getClientSize();
        $subcontent3 = $request->input('subcontent3');
        $sub_title3 = $request->input('sub_title3');
        $new_name3 = rand(). '.'.$blog_image3->getClientOriginalExtension();
        $blog_image3->move(public_path("images/blog"), $new_name3);

        $blog_image4 = $request->file('sub_img4');
        $filesize = $blog_image->getClientSize();
        $subcontent4 = $request->input('subcontent4');
        $sub_title4 = $request->input('sub_title4');
        $new_name4 = rand(). '.'.$blog_image2->getClientOriginalExtension();
        $blog_image4->move(public_path("images/blog"), $new_name4);

        $blog_image5 = $request->file('sub_img5');
        $filesize = $blog_image->getClientSize();
        $subcontent5 = $request->input('subcontent5');
        $sub_title5 = $request->input('sub_title5');
        $new_name5 = rand(). '.'.$blog_image5->getClientOriginalExtension();
        $blog_image5->move(public_path("images/blog"), $new_name5);
        
    
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

        $blog_image1 = $request->file('sub_img1');
        $filesize = $blog_image->getClientSize();
        $subcontent1 = $request->input('subcontent1');
        $sub_title1 = $request->input('sub_title1');
        $new_name1 = rand(). '.'.$blog_image1->getClientOriginalExtension();
        $blog_image1->move(public_path("images/blog"), $new_name1);
        
        /*
        $blog_image2 = $request->file('sub_img2');
        $filesize = $blog_image->getClientSize();
        $subcontent2 = $request->input('subcontent2');
        $sub_title2 = $request->input('sub_title2');
        $new_name2 = rand(). '.'.$blog_image2->getClientOriginalExtension();
        $blog_image2->move(public_path("images/blog"), $new_name2);
        
        
        $blog_image3 = $request->file('sub_img3');
        $filesize = $blog_image->getClientSize();
        $subcontent3 = $request->input('subcontent3');
        $sub_title3 = $request->input('sub_title3');
        $new_name3 = rand(). '.'.$blog_image3->getClientOriginalExtension();
        $blog_image3->move(public_path("images/blog"), $new_name3);

        $blog_image4 = $request->file('sub_img4');
        $filesize = $blog_image->getClientSize();
        $subcontent4 = $request->input('subcontent4');
        $sub_title4 = $request->input('sub_title4');
        $new_name4 = rand(). '.'.$blog_image2->getClientOriginalExtension();
        $blog_image4->move(public_path("images/blog"), $new_name4);

        $blog_image5 = $request->file('sub_img5');
        $filesize = $blog_image->getClientSize();
        $subcontent5 = $request->input('subcontent5');
        $sub_title5 = $request->input('sub_title5');
        $new_name5 = rand(). '.'.$blog_image5->getClientOriginalExtension();
        $blog_image5->move(public_path("images/blog"), $new_name5);
        */

        $blog = new Blog;
        $blog->blog_img = $new_name;
        $blog->size = $filesize;
        $blog->content = $content;
        $blog->title = $title;
        $blog->user_id = $user_id;

        $blog->subimg1 = $new_name1;
        $blog->subcontent1 = $subcontent1;
        $blog->subtile1 = $sub_title1;
        
        /*
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
        */
        $blog->save();
        return back()->with('success', 'Uploaded Blog successfully')->with('path',$new_name);
    }
    public function destroy($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog')->with('sucess', 'Successully Deleted');
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
