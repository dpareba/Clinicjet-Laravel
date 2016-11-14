@extends('layouts.master')


@section('content')
@include('include.message-block')
<form action="{{route('clinicdetail.store')}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="clinictype">Clinic Type</label>
    <select name="clinictype_id" id="clinictype_id" >
     <option value="">Select Clinic Type</option>
    @foreach($clinictype as $clinictypes)

    <option value="{{$clinictypes->id}}">{{$clinictypes->ClinicType}}</option>

    @endforeach
      
    </select>

  </div>
  
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
    <label for="statename">State Name</label>
    <select name="state_id" id="state_id" >
     <option value="">Select a State</option>
     
    </select>

  </div>
  <div class="form-group">
    <label for="cityname">City Name</label>
    <select name="city_id" id="city_id" >
     <option value="">Select a City</option>
      
    </select>

  </div>


   <div>
     <label for="labelclinicname">Clinic Name</label>
     <input class="form-control" type="text" name="ClinicName" id="ClinicName">
   </div>
   <button class="btn btn-success" type="submit"> Add the Clinic!</button>
</form>

<script type="text/javascript"> 
 var token = '{{Session::token()}}';  
  var urlstate = '{{URL::to('getState')}}';   
   var urlcity = '{{URL::to('getCity')}}';
 </script>

  @endsection