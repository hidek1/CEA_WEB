@extends('layout')
@section('content')
				<form method="POST" action="/contact/{{$contact->id}}">	
					{{csrf_field()}}
					{{method_field('PUT')}}
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" value="{{ $contact->name}}">
					</div>
					<div class="form-group">
						<label>Enter Email</label>
						<input type="email" name="email" class="form-control" value=" {{$contact->email}} ">
					</div>
					<div class="form-group">
						<label>Camping Type</label>
						<input type="text" name="type" class="form-control" value="{{$contact->type}}">
					</div>
					<div class="form-group">
						<label>Content Body</label><br />
						<textarea name="body" class="form-control rounded-0" rows="3">
							{{$contact->body}}
						</textarea>
						
					</div>
					<div class="cleafloat">&nbsp;</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Update" />
					</div>
				</form>
@endsection