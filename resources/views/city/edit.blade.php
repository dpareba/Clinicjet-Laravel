@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('city.update',$city->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="PATCH">
  <div class="form-group">
    <label for="countryname">Country Name</label>
    <select name="country_id" id="country_id">

    @foreach($country as $countries)
    @if($countries->id==$city->country_id)
    <option selected value="{{$countries->id}}">{{$countries->CountryName}}</option>
    @else
    <option value="{{$countries->id}}">{{$countries->CountryName}}</option>
    @endif
    @endforeach
      
    </select>

  </div>
  <div class="form-group">
    <label for="statename">State Name</label>
    <select name="state_id" id="state_id">

    @foreach($state as $states)
    @if($states->id==$city->state_id)
    <option selected value="{{$states->id}}">{{$states->StateName}}</option>
    @else
    <option value="{{$states->id}}">{{$states->StateName}}</option>
    @endif
    @endforeach
      
    </select>

  </div>

   <label for="cityname">City Name</label>
     <input class="form-control" type="text" name="CityName" id="CityName" value="{{$city->CityName}}">
  
   <button class="btn btn-success" type="submit"> Modify the City!</button>
</form>

<script type="text/javascript"> 
 var token = '{{Session::token()}}';  
  var urlstate = '{{URL::to('getState')}}';   
 </script>  




  @endsection