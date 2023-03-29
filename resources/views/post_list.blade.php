@extends('layouts.orange')
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets/images/img_bg_2.jpg')}});">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Detalles del post</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12">
		
		@foreach($posts as $item)
		<p>Title: 		{{$item->title}}</p>
		<p>Author: 		{{$item->author}}</p>
		<p>Date: 		{{$item->created_at}}</p>
		<p>Content:		{{$item->content}}</p>
		
		@endforeach

	</div>
</div>
</div>

@endsection