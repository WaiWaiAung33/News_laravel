@extends('layout.app')
@section('content')
<h3>Create News Table</h3>
<form action="{{ url('/news/store') }}" method="post">
	@csrf
	<label>Title</label><br>
	<input type="text" name="title" value="{{old('title')}}" ><br>
	<label>Detail</label><br>
	<input type="text" name="detail" value="{{old('detail')}}"><br>
	<button type="submit">Save</button>
	<a href="{{ url('news') }}" class="btn btn-success">Back</a><br>


</form>
@stop