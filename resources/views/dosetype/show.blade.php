@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('dosetype.destroy',$dt->id)}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="DELETE">
  <div class="form-group">
  	<label for="LableDosetypeName">Dose Type</label>
  	<label for="dosetype">{{$dt->DoseType}}</label>
  </div>	
   <div class="form-group">
  	<label for="LableDoseType">Dose Type</label>
  	<label for="countryname">{{$dt->DoseType}}</label>
  </div>	 
    <button class="btn btn-success" type="submit">Delete Dose Type!</button>

</form>


  @endsection