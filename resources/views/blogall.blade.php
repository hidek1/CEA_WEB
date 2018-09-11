@extends('layout')
@section('content')
	<div class="row">
		<div class="content">
			<article class="article">
				<div class="col-lg-8">
					@foreach($bloglists as $bloglist)
					<h1 class="article__title">{{$bloglist->title}}</h1>
					<div class="article__content">
						{{ str_limit($bloglist->created_at,10)}}
						{{$bloglist->name}}
						<p>
							{{$bloglist->content}}
						</p>
						<img  src="{{asset('images/blog/'.$bloglist->blog_img)}}" alt="" width="638" height="425">

					</div>
					@endforeach
			</div>
			</article>
		</div>
	</div>
@endsection