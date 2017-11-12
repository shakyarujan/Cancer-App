@extends('admin/includes/adminMaster')

@php
   	if(isset($editMenu) && isset($id)){
   		$action = '/admin/menu/'.$id;
   		$nameVal = $editMenu["name"];
   		$linkVal = $editMenu["linksrc"];
   		$headchecked = ($editMenu["type"]==1)?'checked="checked"':'';
   		$footchecked = ($editMenu["type"]==0)?'checked="checked"':'';
   		$published = ($editMenu["status"]==1)?'checked="checked"':'';
   		$unpublished = ($editMenu["status"]==0)?'checked="checked"':'';
    }
    else{
    	$action = '/admin/menu';
    	$nameVal = $linkVal ='';
    	$headchecked = 'checked="checked"';
    	$footchecked = '';
    	$published = 'checked="checked"';
    	$unpublished = '';
    }
@endphp

@section('content')
	<div class="container">

	  <form method="post" action="{{ $action }}">
	    <div class="form-group row">
	      {{csrf_field()}}

	      @if(isset($editMenu))
	      	{{ method_field('patch') }}
	      	<input type="hidden" value = "{{$editMenu["id"]}}">
	      	<input type="hidden" id="parentOf" value="{{$editMenu["parentOf"]}}">
	      @endif

	      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
	      <div class="col-sm-8">
	        <input type="text" class="form-control form-control-lg" id="name" placeholder="name" name="name" value="{{$nameVal}}" required="required">
	      </div>
	    </div>

	    <div class="form-group row">
	      <label for="link" class="col-sm-2 col-form-label col-form-label-sm">Link</label>
	      <div class="col-sm-8">
	      	<input type="text" class="form-control form-control-lg" id="link" placeholder="link" name="link" value="{{$linkVal}}" required="required">
		  </div>
		</div>

		<div class="form-group row" id="menuType">
	      <label for="type" class="col-sm-2 col-form-label col-form-label-sm">Menu Type</label>
	      <div class="col-sm-2">
	      	<label><input type="radio" class="flat-red" {{$headchecked}} name="type" id="top" value="1"> Header Menu</label>
	      </div>
	      <div class="col-sm-2">
	      	<label><input type="radio" class="flat-red" {{$footchecked}} name="type" id="bottom" value="0"> Footer Menu</label>
		  </div>
	    </div>

	    <div class="form-group row">
	      <label for="link" class="col-sm-2 col-form-label col-form-label-sm">Parent Menu</label>
	      <div class="col-sm-4">
	      	<select class="form-control" id="parent" name="parent" onchange="selectParent()">
	      		<option value="0">None</option>
	      	</select>
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

	    <div class="form-group row">
	      <input type="submit" class="btn btn-primary" value="Save">
	    </div>
	  </form>
	</div>
	
	<div class="app"></div>

	<script src="{!! asset('ajax/menu.js')!!}"></script>
@endsection