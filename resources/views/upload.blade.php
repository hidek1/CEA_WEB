@extends('dashboard')
@section('content')
 <div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12"><h3 class="page-header"><a href="/index_registration_agency">Upload Image</a>
			
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
				<img src="/images/{{ Session::get('path') }}" width="300" />
			@endif
			
			<form action="{{ route('upload.file',$type)}}" class="form-horizontal" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				<input type="file" name="file"><br />
				<div class="col-md-3">
					Please select user:
					<select class="form-control" name='user_id'>
							<option value="">Please select Users:</option>
							@foreach($users as $user)
							<option value="{{$user->id}}">{{$user->name}}</option>
							@endforeach
					</select>
					<input type="submit" name="submit" value="upload" class="btn btn-primary">
				</div>
			</form>
	  </div>
	</div>
 </div>
@endsection