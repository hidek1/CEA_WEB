@extends('dashboard')
@section('content')
 <div id="page-wrapper">
 	@if(Auth::check())
	 	  	@if($message = Session::get('success'))
	            <div class="alert alert-success alert-block">
	                <button type="button" class="close" data-dismiss="alert">X</button>
	                <strong>{{$message}}</strong>
	            </div>
	        @endif
	        <br />
	        <br />
	        <br />
	        	<a href="/blog/create" class="btn btn-primary" target="_blog">Add Blog</a>
	        <br />
	        <br />
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
	 				<td><a href="/blog/{{$blog->id}}/edit" target="_blogedit"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit">Edit</span></button></a></td>
	 				<td>
	 					<form action="/blog/{{$blog->id}}" method="POST">
	 						{{csrf_field()}}
							{{method_field('DELETE')}}
	 						<!--<input type="submit" name="submit" class="btn btn-danger" value="Deleted">-->
	 					</form>
	 					<button class="btn btn-danger" data-blog_id="{{$blog->id}}" data-toggle="modal" data-target="#delete">Delete</button>
	 				</td>
	 			</tr>
	 		@endforeach
	 	</table>
	 	{{ $blogs->links() }}
 	@endif
 </div>
 <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('blog.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="blog_id" id="blog_id" value="">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>
<script>
	$(document).ready(function(){
		$('#delete').on('show.bs.modal', function(event){
			var button = $(event.relatedTarget)
			var blog_id = button.data('blog_id')
			var modal = $(this)
			modal.find('.modal-body #blog_id').val(blog_id);
		});
	});
</script>
@endsection
