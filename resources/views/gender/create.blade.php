@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('gender.store')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="labelgendername"> Gender Name </label>
		<input class="form-control" type="text" name="GenderName" id="GenderName">
	</div>
	<button class="btn btn-success" type="submit">Add the Gender!</button>
</form> 

  @endsection