@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('clinictype.destroy',$clinictype->id)}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="DELETE">
   <div class="form-group">
  	<label for="Lableclinictype">Clinic Type</label>
  	<label for="clinictype">{{$clinictype->ClinicType}}</label>
  </div>	 
    <button class="btn btn-success" type="submit">Delete Clinic Type!</button>

</form>


  @endsection