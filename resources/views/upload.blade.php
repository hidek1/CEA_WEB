@extends('dashboard')
@section('content')
 <div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12"><h3 class="page-header"><a href="/index_registration_agency">Upload Image</a></h3>
			<p class="text-success">
			@if($message = Session::get('message'))
				{{$message}}
			@endif
			</p>
			<form action="{{ route('upload.file')}}" class="form-horizontal" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				<input type="file" name="file"><br />
				<div class="col-md-3">
					Please select user:
					<select class="form-control" name='user_id'>
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