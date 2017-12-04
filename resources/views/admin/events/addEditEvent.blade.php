@extends('admin/includes/adminMaster')

@php
   	if(isset($editEvent)){
   		$action = '/admin/events/'.$id;
   		$nameVal = $editEvent["title"];
   		$descVal = $editEvent["description"];
   		$stDateVal = $editEvent["st_date"];
   		$endDateVal = $editEvent["end_date"];
   		$authorVal = $editEvent["author"];
   		$contentVal = $editEvent["content"];
   		$published = ($editEvent["status"]==1)?'checked="checked"':'';
   		$unpublished = ($editEvent["status"]==0)?'checked="checked"':'';
   		$homepage = ($editEvent["homepage"]==1)?'checked="checked"':'';
   		$nonehome = ($editEvent["homepage"]==0)?'checked="checked"':'';
   		$imgsrc = '/images/events/thumbnails/'.$editEvent["image"];

    }
    else{
    	$action = '/admin/events';
    	$nameVal = $descVal = $contentVal = $stDateVal = $endDateVal = $authorVal = '';
    	$published = $nonehome = 'checked="checked"';
    	$unpublished = $homepage = '';
    	$imgsrc = '#';
    }
@endphp

@section('content')
	<div class="container">

	  <form method="post" enctype="multipart/form-data" action="{{ $action }}">
	    <div class="form-group row">
	      {{csrf_field()}}

	      @if(isset($editEvent))
	      	{{ method_field('patch') }}
	      	<input type="hidden" value = "{{$editEvent["id"]}}">
	      @endif

	      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
	      <div class="col-sm-8">
	        <input type="text" class="form-control form-control-lg" id="title" placeholder="Title" name="title" value="{{$nameVal}}" required="required">
	      </div>
	    </div>

	    <div class="form-group row">
	      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
	      <div class="col-sm-4">
	        <input type="text" class="form-control form-control-lg" id="author" placeholder="Location" name="author" value="{{$authorVal}}" required="required">
	      </div>

	    </div>

	    <div class="form-group row">
	      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Start Date</label>
	      <div class="col-sm-3">
	        <input type="text" class="form-control form-control-lg st_date" id="st_date" placeholder="Start Date" name="st_date" value="{{$stDateVal}}" required="required">
	      </div>

	      <label for="name" class="col-sm-1 col-sm-offset-1 col-form-label col-form-label-lg">End Date</label>
	      <div class="col-sm-3">
	        <input type="text" class="form-control form-control-lg end_date" id="end_date" placeholder="End Date" name="end_date" value="{{$endDateVal}}" required="required">
	      </div>
	    </div>

	    <div class="form-group row imgUpload">
	      <label for="link" class="col-sm-2 col-form-label col-form-label-sm">Image</label>
	      <div class="col-sm-8">
	    	<input name="mainImg" id="mainImg" type="file" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
	    	<div class="row">
		    	<img id="dispImg" src="#" alt="" />
		    </div>
		  </div>
		</div>

		<div class="row imgDisp">
			<div class="col-md-1 col-md-offset-2 imgPrev">
				<img src="{{$imgsrc}}" alt="">
				<p style="cursor: pointer; color:#3f9dbc;" class="text-center remImg">Delete</p>
			</div>
		</div>

	    <div class="form-group row">
	      <label for="link" class="col-sm-2 col-form-label col-form-label-sm">Short Description</label>
	      <div class="col-sm-8">
	      	<input type="text" class="form-control form-control-lg" id="desc" placeholder="Short Description" name="desc" value="{{$descVal}}" required="required">
		  </div>
		</div>

		<div class="form-group row">
	      <label for="link" class="col-sm-2 col-form-label col-form-label-sm">Content</label>
	      <div class="col-sm-8">
	      	<textarea class="form-control form-control-lg tiny-text" id="content" placeholder="content" name="content"required="required">{{$contentVal}}</textarea>
		  </div>
		</div>

		<div class="form-group row" id="published">
	      <label for="type" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
	      <div class="col-sm-2">
	      	<label><input type="radio" class="flat-red" {{$published}} name="status" id="published" value="1"> Published</label>
	      </div>
	      <div class="col-sm-2">
	      	<label><input type="radio" class="flat-red" {{$unpublished}} name="status" id="unpublished" value="0"> Unpublished</label>
		  </div>
	    </div>

	    <div class="form-group row" id="published">
	      <label for="type" class="col-sm-2 col-form-label col-form-label-sm">Homepage</label>
	      <div class="col-sm-2">
	      	<label><input type="radio" class="flat-red" {{$homepage}} name="homepage" id="published" value="1"> Display</label>
	      </div>
	      <div class="col-sm-2">
	      	<label><input type="radio" class="flat-red" {{$nonehome}} name="homepage" id="unpublished" value="0"> Don't Display</label>
		  </div>
	    </div>

	    <div class="form-group row">
	      <input type="submit" class="btn btn-primary" value="Save">
	    </div>
	  </form>
	</div>

	<script src="{!! asset('ajax/article.js')!!}"></script>
  	  <script>
		  $( function() {
		    $( ".st_date" ).datepicker();
		    $( ".end_date" ).datepicker();
		  } );
	  </script>

@endsection