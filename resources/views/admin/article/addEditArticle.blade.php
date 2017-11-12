@extends('admin/includes/adminMaster')

@php
   	if(isset($editArticle)){
   		$action = '/admin/article/'.$id;
   		$nameVal = $editArticle["title"];
   		$descVal = $editArticle["description"];
   		$contentVal = $editArticle["content"];
   		$published = ($editArticle["status"]==1)?'checked="checked"':'';
   		$unpublished = ($editArticle["status"]==0)?'checked="checked"':'';
   		$homepage = ($editArticle["homepage"]==1)?'checked="checked"':'';
   		$nonehome = ($editArticle["homepage"]==0)?'checked="checked"':'';
   		$imgsrc = '/images/article/thumbnails/'.$editArticle["image"];

    }
    else{
    	$action = '/admin/article';
    	$nameVal = $descVal = $contentVal = '';
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

	      @if(isset($editArticle))
	      	{{ method_field('patch') }}
	      	<input type="hidden" value = "{{$editArticle["id"]}}">
	      @endif

	      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
	      <div class="col-sm-8">
	        <input type="text" class="form-control form-control-lg" id="title" placeholder="Title" name="title" value="{{$nameVal}}" required="required">
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
	      	<textarea class="form-control form-control-lg" id="content" placeholder="content" name="content"required="required">{{$contentVal}}</textarea>
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

@endsection