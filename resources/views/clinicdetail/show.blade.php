@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('clinicdetail.destroy',$clinicdetail->id)}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="DELETE">
  <div class="form-group">
  	<label for="LableClinicName">Clinic Name</label>
  	<label for="clinicname">{{$clinicdetail->ClinicName}}</label>
  </div>	
    <button class="btn btn-success" type="submit">Delete Clinic!</button>

</form>


  @endsection