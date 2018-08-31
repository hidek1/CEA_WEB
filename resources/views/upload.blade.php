@extends('dashboard')
@section('content')
 <div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12"><h3 class="page-header"><a href="/index_registration_agency">Upload Image</a>
			@if($message = Session::get('message'))
				{{$message}}
			@endif
		</h3>
			<form action="{{ route('upload.file')}}" class="form-horizontal" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				<input type="file" name="file"><br />
				<div class="col-md-3">
					Please select to:
					<select class="form-control" name='contact_id'>
							@foreach($contacts as $contact)
							<option value="{{$contact->id}}">{{$contact->name}}</option>
							@endforeach
					</select>
					<input type="submit" name="submit" value="upload" class="btn btn-primary">
				</div>
			</form>
			
	</div>
@endsection