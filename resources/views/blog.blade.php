@extends('dashboard')
@section('content')
 <div id="page-wrapper">
 	<table class="table">
 		<tr>
 			<th>Title</th>
 			<th>Content</th>
 			<th colspan="2">Action</th>
 		</tr>
 		@foreach($blogs as $blog)
 			<tr>
 				<td>{{$blog->title}}</td>
 				<td>{{$blog->content}}</td>
 				<td><a href="/blog/{{$blog->id}}/edit">Edit</a></td>
 				<td>
 					<form action="/blog/{{$blog->id}}" method="POST">
 						{{csrf_field()}}
						{{method_field('DELETE')}}
 						<input type="submit" name="submit" value="Delete">
 					</form>
 				</td>
 			</tr>
 		@endforeach
 	</table>
 </div>
@endsection