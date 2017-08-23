@extends('admin/includes/adminMaster')

@php
   	if(isset($editMenu) && isset($id)){
   		$action = '/admin/menu/'.$id;
   		$nameVal = $editMenu["name"];
   		$linkVal = $editMenu["linksrc"];
    }
    else{
    	$action = '/admin/menu';
    	$nameVal = $linkVal ='';
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

		<div class="form-group row">
	      <label for="type" class="col-sm-2 col-form-label col-form-label-sm">Menu Type</label>
	      <div class="col-sm-2">
	      	<input type="radio" class="flat-red" checked="checked" name="type" id="top" value="1">Header Menu
	      </div>
	      <div class="col-sm-2">
	      	<input type="radio" class="flat-red" name="type" id="bottom" value="1">Footer Menu
		  </div>
	    </div>

	    <div class="form-group row">
	      <div class="col-md-2"></div>
	      <input type="submit" class="btn btn-primary">
	    </div>
	  </form>
	</div>
@endsection