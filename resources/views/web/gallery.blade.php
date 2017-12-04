@extends('web/include/header')

   	@if(isset($gallery))
   		<div class="inner-banner">
			<div class="container">
				<h2>{{$gallery->title}}</h2>
			</div>
		</div>

		<div class="content">
			<section class="thumb-with-text">
				<div class="container">
					<div class="container-cover">
							{!!$gallery->content!!}
						</div>
					</div>
				</div>
			</section>
		</div>
    @endif
    @if(isset($galleries))
    	@foreach($galleries as $gallery)
	    	<div class="inner-banner">
				<div class="container">
					<h2>Videos</h2>
				</div>
			</div>

			<div class="content">
				<section class="thumb-with-text">
					<div class="container">
						<div class="container-cover">
							<div class="col-md-4">
								{!!$gallery["content"]!!}
								<p class="text-center"><b>{{$gallery["title"]}}</b></p>
							</div>
						</div>
					</div>
				</section>
			</div>
		@endforeach
    @endif




@extends('web/include/footer')
