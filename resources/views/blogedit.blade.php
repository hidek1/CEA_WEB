@extends('dashboard')
@section('content')
 <div id="page-wrapper">
 	@if(Auth::check())
	<div class="row">
		<div class="col-lg-12"><h3 class="page-header">Edit Blog</a>
			
		</h3>
		@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			@if($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">X</button>
					<strong>{{$message}}</strong>
				</div>
				<img src="/images/blog/{{ Session::get('path') }}" style="width:300px;" />
			@endif
		<form action="/blog/{{$blog->id}}" class="form-horizontal" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				{{method_field('PUT')}}
					<input type="file" name="blog_img"><br />
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" name="title" value="{{$blog->title}}">
							<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
							  <label for="comment">Blog:</label>
							  <textarea class="form-control" rows="5" id="comment" name="content">{{$blog->content}}</textarea><br />
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img1"><br />
							<label for="title">Sub Title 1</label>
							<input type="text" class="form-control" name="sub_title1" value="{{$blog->subtile1}}">
							  <label for="comment">Sub Content 1:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent1">
							  	{{$blog->subcontent1}}
							  </textarea><br />
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img2"><br />
							<label for="title">Sub Title 2</label>
							<input type="text" class="form-control" name="sub_title2" value="{{$blog->subtile2}}">
							  <label for="comment">Blog:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent2">
							  	{{$blog->subcontent2}}
							  </textarea><br />
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img3"><br />
							<label for="title">Title</label>
							<input type="text" class="form-control" name="sub_title3" value="{{$blog->subtile3}}">
							  <label for="comment">Blog:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent3">
							  	{{$blog->subcontent3}}
							  </textarea><br />
							  
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img4"><br />
							<label for="title">Title</label>
							<input type="text" class="form-control" name="sub_title4" value="{{$blog->subtile4}}">
							  <label for="comment">Blog:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent4">
							  	{{$blog->subcontent4}}
							  </textarea><br />
							  
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img5"><br />
							<label for="title">Title</label>
							<input type="text" class="form-control" name="sub_title5" value="{{$blog->subtile5}}">
							  <label for="comment">Blog:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent5">
							  	{{$blog->subcontent5}}
							  </textarea><br />
						</div>
					</div>
				</div>
				<input type="submit" name="submit" value="Update Blog" class="btn btn-primary">
			</form>
	  </div>
	</div>
	@else
		<div class="row">
			<h3>Please log in first <a href="/main">Log in</a></h3>
			</div>
	@endif
 </div>
@endsection