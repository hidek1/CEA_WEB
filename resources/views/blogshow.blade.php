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
 				<td><a href="{{$blog->id}}">Edit</td>
 			</tr>
 			@endforeach
 		</table>
 </div>
@endsection
