@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('country.destroy',$country->id)}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="DELETE">
	<div class="form-group">
		<label for="LableCountryName"> Country Name</label>
		<label for="CountryName">{{$country->CountryName}}</label>

	</div>
    <button class="btn btn-success" type="submit">Modify the Country!</button>

</form>


  @endsection