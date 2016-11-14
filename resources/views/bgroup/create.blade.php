@extends('layouts.master')


@section('content')	
@include('include.message-block')

<form action="{{route('bgroup.store')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="labelCountryName"> Blood Group </label>
		<input class="form-control" type="text" name="bloodgroup" id="bloodgroup">
	</div>
	<button class="btn btn-success" type="submit">Add the BloodGroup!</button>
</form> 

  @endsection