@extends('dashboard')
@section('content')
 <div id="page-wrapper">
 	@if(Auth::check())
	<div class="row">
		<div class="col-lg-12"><h3 class="page-header">Add Blog</a>
			
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
				<img src="/images/blog/{{ Session::get('path') }}" style="width:300px;height: 150px;" />
			@endif

			<form action="/blog" class="form-horizontal" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="blog_img"><br />
							<label for="title">Title</label>
							<input type="text" class="form-control" name="title" value="{{ old('title')}}">
							<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
							  <label for="comment">Blog:</label>
							  <textarea class="form-control" rows="5" id="comment" name="content">{{ old('content')}}</textarea>
							  <br />  
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img1"><br />
							<label for="title">Sub Title 1</label>
							<input type="text" class="form-control" name="sub_title1" value="{{ old('sub_title1')}}">
							  <label for="comment">Sub Content 1:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent1">{{ old('subcontent1')}}
							  </textarea><br />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img2"><br />
							<label for="title">Sub Title 2</label>
							<input type="text" class="form-control" name="sub_title2" value="{{ old('sub_title2')}}">
							  <label for="comment">Blog:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent2">{{ old('subcontent2')}}
							  </textarea><br />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img3"><br />
							<label for="title">Sub Title 3</label>
							<input type="text" class="form-control" name="sub_title3" value="{{ old('sub_title3')}}">
							  <label for="comment">Blog 3:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent3">
							  	{{ old('subcontent3')}}
							  </textarea><br />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img4"><br />
							<label for="title">Sub Title 4 </label>
							<input type="text" class="form-control" name="sub_title4" value="{{ old('sub_title4')}}">
							  <label for="comment">Blog 4:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent4">{{ old('subcontent4')}}
							  </textarea><br />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="sub_img5"><br />
							<label for="title">Sub Title 5</label>
							<input type="text" class="form-control" name="sub_title5" value="{{ old('sub_title5')}}">
							  <label for="comment">Blog 5:</label>
							  <textarea class="form-control" rows="5" id="comment" name="subcontent5">{{ old('subcontent5')}}
							  </textarea><br />
						</div>
					</div>
				</div>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
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