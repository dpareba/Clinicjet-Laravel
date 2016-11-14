@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('state.update',$state->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="PATCH">
  <div class="form-group">
    <label for="countryname">Country Name</label>
    <select name="country_id" id="country_id">

    @foreach($country as $countries)
    @if($countries->id==$state->country_id)
    <option selected value="{{$countries->id}}">{{$countries->CountryName}}</option>
    @else
    <option value="{{$countries->id}}">{{$countries->CountryName}}</option>
    @endif
    @endforeach
      
    </select>

  </div>
   <div>
     <label for="statename">State Name</label>
     <input class="form-control" type="text" name="StateName" id="StateName" value="{{$state->StateName}}">
   </div>
   <button class="btn btn-success" type="submit"> Add the State!</button>
</form>






  @endsection