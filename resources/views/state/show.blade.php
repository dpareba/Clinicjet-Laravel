@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('state.destroy',$state->id)}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="DELETE">
  <div class="form-group">
  	<label for="LableCountryName">Country Name</label>
  	<label for="countryname">{{$country->CountryName}}</label>
  </div>	
   <div class="form-group">
  	<label for="LableStateName">State Name</label>
  	<label for="countryname">{{$state->StateName}}</label>
  </div>	 
    <button class="btn btn-success" type="submit">Delete State!</button>

</form>


  @endsection