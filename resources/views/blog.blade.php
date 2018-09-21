@extends('dashboard')
@section('content')
 <div id="page-wrapper">
 	@if(Auth::check())
	 	<table class="table table-striped table-bordered table-hover">
	 		<tr>
	 			<th>Title</th>
	 			<th>Content</th>
	 			<th>User ID</th>
	 			<th colspan="2">Action</th>
	 		</tr>
	 		@foreach($blogs as $blog)
	 			<tr>
	 				<td>{{$blog->title}}</td>
	 				<td>{{ str_limit($blog->content, 60)}}</td>
	 				<td>{{$blog->name}}</td>
	 				<td><a href="/blog/{{$blog->id}}/edit"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit">Edit</span></button></a></td>
	 				<td>
	 					<form action="/blog/{{$blog->id}}" method="POST">
	 						{{csrf_field()}}
							{{method_field('DELETE')}}
	 						<input type="submit" name="submit" class="btn btn-danger" value="Delete">
	 					</form>
	 				</td>
	 			</tr>
	 		@endforeach
	 	</table>
	 	{{ $blogs->links() }}
 	@endif
 </div>
@endsection