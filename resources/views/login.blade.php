@extends('layout')
@section('content')
	<div class="row">
		@if($message = Session::get('error'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>{{$message}}</strong>
			</div>
		@endif

		
		<div class="col-md-5">
		
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
			@if(!isset(Auth::user()->email))
				<h3>LogIn System</h3>
				<form method="POST" action="{{ url('/main/checklogin')}}">	
					{{csrf_field()}}
					<div class="form-group">
						<label>Enter Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Enter Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					
					<div class="cleafloat">&nbsp;</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary" value="Login" />
					</div>
				</form>
				@else
				<h3>Sorry you dont have access this page</h3>

			 @endif
		</div>
	</div>
@endsection