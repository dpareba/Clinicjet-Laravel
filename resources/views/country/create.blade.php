@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('country.store')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="labelCountryName"> Country Name </label>
		<input class="form-control" type="text" name="CountryName" id="CountryName">
	</div>
	<button class="btn btn-success" type="submit">Add the Country!</button>
</form> 

  @endsection