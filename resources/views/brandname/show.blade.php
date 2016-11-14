@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('brandname.destroy',$bn->id)}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="DELETE">
  <div class="form-group">
  	<label for="LableBrandName">Dose Type</label>
  	<label for="brandname">{{$dt->DoseType}}</label>
  </div>	
   <div class="form-group">
  	<label for="LableBrandName">Brand Name</label>
  	<label for="brandname">{{$bn->BrandName}}</label>
  </div>	 
    <button class="btn btn-success" type="submit">Delete Brand Name!</button>

</form>


  @endsection