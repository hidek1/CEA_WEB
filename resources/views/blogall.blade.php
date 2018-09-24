@extends('layout')
@section('content')
	<div class="row">
		<div class="content">
			<article class="article">
				<div class="col-lg-8">
					@foreach($bloglists as $bloglist)
					<div class="row">
						<h1 class="article__title">{{$bloglist->title}}</h1>
						<div class="article__content">
							{{ str_limit($bloglist->created_at,10)}}
							{{$bloglist->name}}
							<br />
							<p>
								{{$bloglist->content}}
							</p>
							<img  src="{{asset('images/blog/'.$bloglist->blog_img)}}" alt="" width="100%">
							<br />
							<h2>{{$bloglist->subtile1}}</h2>
							<p>
								{{$bloglist->subcontent1}}
							</p>
							<img  src="{{asset('images/blog/'.$bloglist->subimg1)}}" alt="" width="100%">
							<br />
							<h2>{{$bloglist->subtile2}}</h2>
							<p>
								{{$bloglist->subcontent2}}
							</p>
							<img  src="{{asset('images/blog/'.$bloglist->subimg2)}}" alt="" width="100%">
							<br />
							<h2>{{$bloglist->subtile3}}</h2>
							<p>
								{{$bloglist->subcontent3}}
							</p>
							<img  src="{{asset('images/blog/'.$bloglist->subimg3)}}" alt="" width="100%">
							<br />
							<h2>{{$bloglist->subtile4}}</h2>
							<p>
								{{$bloglist->subcontent4}}
							</p>
							<img  src="{{asset('images/blog/'.$bloglist->subimg4)}}" alt="" width="100%">
							<br />
							<h2>{{$bloglist->subtile5}}</h2>
							<p>
								{{$bloglist->subcontent5}}
							</p>
							<img  src="{{asset('images/blog/'.$bloglist->subimg5)}}" alt="" width="100%">
						</div>
					</div>
					@endforeach
			</div>
			</article>
		</div>
	</div>
@endsection