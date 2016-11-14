@extends('layouts.master')


@section('content')
@include('include.message-block')
<form action="{{route('state.store')}}" method="post">
  {{csrf_field()}}
  
  <div class="form-group">
    <label for="countryname">Country Name</label>
    <select name="countryid" id="countryid">

    @foreach($country as $countries)

    <option value="{{$countries->id}}">{{$countries->CountryName}}</option>

    @endforeach
      
    </select>

  </div>
   <div>
     <label for="statename">State Name</label>
     <input class="form-control" type="text" name="addstate" id="addstate">
   </div>
   <button class="btn btn-success" type="submit"> Add the State!</button>
</form>



  @endsection