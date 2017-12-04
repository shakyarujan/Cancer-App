@extends('admin/includes/adminMaster')

@section('content')
<div class="container">
	<div class="col-md-11 text-right">
	<a href="events/create" class="btn btn-primary btn-sm">Add Event</a>
	</div>
	<div class="col-md-11">
	<table class="table table-striped">
		<tr class="danger">
			<th class="col-sm-1 col-md-1">S.N</th>
			<th class="col-sm-2 col-md-2">Name</th>
			<th class="col-sm-6 col-md-3">slug</th>
			<th class="col-sm-6 col-md-3">Date</th>
			<th class="col-sm-3 col-md-3">Action</th>
		</tr>
	@php ($i = 1)
	@foreach($events as $event)

		@php
			$statusBtn = ($event['status'] == 1)?'<button class="btn btn-xs btn-success">Published </button>':'<button class="btn btn-xs btn-danger">Unpublished </button>';
		@endphp

		<tr class="info">
			<td class="col-sm-1 col-md-1"> {{$i}} </td>
			<td class="col-sm-2 col-md-2"> {{$event['title']}} </td>
			<td class="col-sm-6 col-md-3"> {{$event['slug']}} </td>
			<td class="col-sm-6 col-md-3"> {{$event['st_date']}} </td>
			<td class="col-sm-3 col-md-3"> @php echo $statusBtn @endphp | <a href="{{action('EventController@edit', $event['id'])}}">Edit</a> | 
				<form action="{{action('EventController@destroy', $event['id'])}}" method="post">
	            {{csrf_field()}}
	            {{ method_field('delete') }}
	            <a href="javascript:$('form').submit();" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
	            </form>
			</td>
		</tr>
		@php ($i++)
	@endforeach
	</table>
	</div>
</div>
@endsection