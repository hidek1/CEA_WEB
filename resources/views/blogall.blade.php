@extends('layout')
@section('content')
	<div class="row">
		<div class="content">
			<article class="article">
					@foreach($bloglists as $bloglist)
					<div class="row">
						<h1 class="article__title">{{$bloglist->title}}</h1>
						<div class="article__content"  style="word-break:break-all;">
							{{ str_limit($bloglist->created_at,10)}}
							{{$bloglist->name}}
							<br />
							<img  src="{{asset('images/blog/'.$bloglist->blog_img)}}" alt="" width="80%">
							<br />
							@if($bloglist->subtile1 != NULL)
							<h3 class="blog-subtitle">{{$bloglist->subtile1}}</h3>
							@endif
							<p>
								{{$bloglist->subcontent1}}
							</p>
							@if($bloglist->subimg1 != NULL)
							<img  src="{{asset('images/blog/'.$bloglist->subimg1)}}" alt="" width="80%">
							@endif
							<br />
							@if($bloglist->subtile2 != NULL)
							<h3 class="blog-subtitle">{{$bloglist->subtile2}}</h3>
							@endif
							<p>
								{{$bloglist->subcontent2}}
							</p>
							@if($bloglist->subimg2 != NULL)
							<img  src="{{asset('images/blog/'.$bloglist->subimg2)}}" alt="" width="80%">
							@endif
							<br />
							@if($bloglist->subtile3 != NULL)
							<h3 class="blog-subtitle">{{$bloglist->subtile3}}</h3>
							@endif
							<p>
								{{$bloglist->subcontent3}}
							</p>
							@if($bloglist->subimg3 != NULL)
							<img  src="{{asset('images/blog/'.$bloglist->subimg3)}}" alt="" width="80%">
							@endif
							<br />
							@if($bloglist->subtile4 != NULL)
							<h3 class="blog-subtitle">{{$bloglist->subtile4}}</h3>
							@endif
							<p>
								{{$bloglist->subcontent4}}
							</p>
							@if($bloglist->subimg4 != NULL)
							<img  src="{{asset('images/blog/'.$bloglist->subimg4)}}" alt="" width="80%">
							@endif
							<br />
							@if($bloglist->subtile5 != NULL)
							<h3 class="blog-subtitle">{{$bloglist->subtile5}}</h3>
							@endif
							<p>
								{{$bloglist->subcontent5}}
							</p>
							@if($bloglist->subimg5 != NULL)
							<img  src="{{asset('images/blog/'.$bloglist->subimg5)}}" alt="" width="80%">
							@endif
						</div>
					</div>
					@endforeach
			</article>
		</div>
	</div>
@endsection