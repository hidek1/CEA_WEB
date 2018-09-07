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
					<input type="file" name="blog_img"><br />
				<div class="col-md-6">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" name="title" value="">
						<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
						  <label for="comment">Blog:</label>
						  <textarea class="form-control" rows="5" id="comment" name="content"></textarea><br />
						  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
					</div>
				</div>
				
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