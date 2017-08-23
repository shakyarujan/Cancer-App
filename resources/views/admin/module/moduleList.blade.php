@extends('admin/includes/adminMaster')

@section('content')
<div class="container">
	<div class="col-md-11">
	<table class="table table-striped">
		<tr class="danger">
			<th class="col-sm-1 col-md-1">S.N</th>
			<th class="col-sm-2 col-md-2">Name</th>
			<th class="col-sm-7 col-md-7">Link</th>
			<th class="col-sm-2 col-md-2">Status</th>
		</tr>
	@php ($i = 1)
	@foreach($moduleList as $module)

		@php
			$statusBtn = ($module['status'] == 1)?'<button class="btn btn-xs btn-success">Published </button>':'<button class="btn btn-xs btn-danger">Unpublished </button>';
		@endphp

		<tr class="info">
			<td class="col-sm-1 col-md-1"> {{$i}} </td>
			<td class="col-sm-2 col-md-2"> {{$module['name']}} </td>
			<td class="col-sm-7 col-md-7"> {{$module['linksrc']}} </td>
			<td class="col-sm-7 col-md-7"> @php echo $statusBtn @endphp</td>
		</tr>
		@php ($i++)
	@endforeach
	</table>
	</div>
</div>
@endsection