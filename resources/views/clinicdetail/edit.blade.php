@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('clinicdetail.update',$clinicdetail->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="PATCH">
  
  <div class="form-group">
    <label for="clinictype">Clinic Type</label>
    <select name="clinictype_id" id="clinictype_id">

    @foreach($clinictype as $clinictypes)
    @if($clinictypes->id==$clinicdetail->clinictype_id)
    <option selected value="{{$clinictypes->id}}">{{$clinictypes->ClinicType}}</option>
    @else
    <option value="{{$clinictypes->id}}">{{$clinctypes->ClinicType}}</option>
    @endif
    @endforeach
      
    </select>


  <div class="form-group">
    <label for="countryname">Country Name</label>
    <select name="country_id" id="country_id">

    @foreach($country as $countries)
    @if($countries->id==$clinicdetail->country_id)
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
    @if($states->id==$clinicdetail->state_id)
    <option selected value="{{$states->id}}">{{$states->StateName}}</option>
    @else
    <option value="{{$states->id}}">{{$states->StateName}}</option>
    @endif
    @endforeach
      
    </select>
  <div class="form-group">
    <label for="cityname">City Name</label>
    <select name="city_id" id="city_id">

    @foreach($city as $cities)
    @if($cities->id==$clinicdetail->city_id)
    <option selected value="{{$cities->id}}">{{$cities->CityName}}</option>
    @else
    <option value="{{$cities->id}}">{{$cities->CityName}}</option>
    @endif
    @endforeach
      
    </select>
  </div>

   <label for="clinicname">Clinic Name</label>
     <input class="form-control" type="text" name="ClinicName" id="ClinicName" value="{{$clinicdetail->ClinicName}}">
  
   <button class="btn btn-success" type="submit"> Modify the Clinic Detail!</button>
</form>

<script type="text/javascript"> 
 var token = '{{Session::token()}}';  
  var urlstate = '{{URL::to('getState')}}';   
  var urlcity = '{{URL::to('getCity')}}';   
 </script>  




  @endsection