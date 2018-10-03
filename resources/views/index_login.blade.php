@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-8">
		@if($message = Session::get('error'))
			<div class="alert alert-danger alert-block text-center">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>{{$message}}</strong>
			</div>
		@endif
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		@if(!isset(Auth::user()->id))
				<div class="panel panel-info" style="padding:20px;">
                        <div class="panel-title" style="padding:10px;">Sign In</div>
		
 {{--                        <div style="float:right; font-size: 80%; position: relative; margin-right:10px;"><a href="{{ url('password/reset') }}">Forgot password?</a></div> --}}                   
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
				<h3>Sorry Page not found</h3>
			 @endif
		</div>
	</div>
@endsection