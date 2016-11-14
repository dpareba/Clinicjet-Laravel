@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('country.update',$country->id)}}" method="post">
{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<label for="LableCountryName"> Country Name </label>
	<input type="text" id="CountryName" name="CountryName" value="{{$country->CountryName}}">
	    <button class="btn btn-success" type="submit">Modify the Country!</button>

</form>

  @endsection