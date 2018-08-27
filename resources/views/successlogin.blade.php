@extends('layout')
@section('content')
	
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	             
	             @if(isset(Auth::user()->email))
					
					<strong>Welcome {{ Auth:: user()->name }}</strong>
							<br>
						<a href="{{ url('main/logout') }}">Logout</a>
					
				@else
					<script type="text/javascript">window.location ="/main";</script>
				@endif
	            </div>
        </div>
    </div>
@endsection

