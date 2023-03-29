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
							<button current="{{$post_id}}" id="btnLoadDetails" class="btn btn-success btn-sm">Haz click aqui para ver los detalles del post {{$post_id}}</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about">
		<div class="container">
			<div id="divContent1" class="about-content">

			</div>
		</div>
	<div class="desc">
		<div class="container">
		<h3>&amp;Comentarios&amp;</h3>

		<div class="desc" id="divContent2">
				
		
		</div>
		</div>
	</div>
</div>	


@endsection