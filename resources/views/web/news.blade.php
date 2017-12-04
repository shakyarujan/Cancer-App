@extends('web/include/header')

<div class="inner-banner">
	<div class="container">
		<h2>{{$news->title}}</h2>
	</div>
</div>

<div class="content">
	<section class="thumb-with-text">
		<div class="container">
			<div class="container-cover">
				{!!$news->content!!}
			</div>
		</div>
	</section>
</div>

@extends('web/include/footer')
