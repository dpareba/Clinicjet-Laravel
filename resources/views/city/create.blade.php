@extends('layouts.master')


@section('content')
@include('include.message-block')
<form action="{{route('city.store')}}" method="post">
  {{csrf_field()}}
  
  <div class="form-group">
    <label for="countryname">Country Name</label>
    <select name="country_id" id="country_id" >
     <option value="">Select a Country</option>
    @foreach($country as $countries)

    <option value="{{$countries->id}}">{{$countries->CountryName}}</option>

    @endforeach
      
    </select>

  </div>
 <div class="form-group">
    <label for="lablestatename">State Name</label>
    <select name="state_id" id="state_id">
    <option value="">Select a State</option>
    </select>

  </div>

   <div>
     <label for="labelcityname">City Name</label>
     <input class="form-control" type="text" name="CityName" id="CityName">
   </div>
   <button class="btn btn-success" type="submit"> Add the City!</button>
</form>

<script type="text/javascript"> 
 var token = '{{Session::token()}}';  
  var urlstate = '{{URL::to('getState')}}';   
 </script>

  @endsection