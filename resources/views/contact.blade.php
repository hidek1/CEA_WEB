
@extends('layout')
@section('content')

	<div class="col-md-8">
	  	<div class="alert alert-success">
	  		<button type="button" class="close" data-dismiss="alert">x</button>
	        @if(session("message"))
	            {{session('message')}}
	        @endif
	    </div>
	</div>	
  	<table class="table-striped">
  		<tr table-info>
  			<th>Name</th>
  			<th>Email</th>
  			<th>Camping Type</th>
  			<th>Body</th>
  			<th>Date</th>
  			<th colspan="2">Action</th>
  		</tr>
  		
	@foreach($contacts as $key => $list)
		<tr>
			<td>{{$list->name}}</td>
			<td>{{$list->email}}</td>
			<td>{{$list->type}}</td>
			<td>{{$list->body}}</td>
			<td>{{$list->created_at}}</td>
			<td><a href="/contact/{{$list->id}}/edit">Edit</a></td>
			<td>
				<form action="/contact/{{$list->id}}" method="POST">
					  {{csrf_field()}}
					  {{method_field('DELETE')}}
				<input type="submit" name="submit" value="Delete">
			</td>
		</tr>
	@endforeach
	</table>
	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a>{{$contacts->links()}}</a></li>
  </ul>
</nav>
	
	
 
@endsection