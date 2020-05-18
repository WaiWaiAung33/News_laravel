@extends('layout.app')
@section('content')
<div>
	<div class="pull-right">
	<a href="{{route('news/create')}}" class="btn btn-success">Crate News</a>
	</div><br><br>
	
	<table class="table table-response" border="1px">
		<tr>
		<th>No</th>
		<th>Title</th>
		<th>Detail</th>
		</tr>
		<tr>

			<th>1</th>
			<th>title</th>
			<th>detail</th>
		</tr>
	</table>
</div>
@stop