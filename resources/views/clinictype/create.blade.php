@extends('layouts.master')


@section('content')
@include('include.message-block')
<form action="{{route('clinictype.store')}}" method="post">
  {{csrf_field()}}
  
   <div>
     <label for="clinictype">Clinic Type</label>
     <input class="form-control" type="text" name="ClinicType" id="ClinicType">
   </div>
   <button class="btn btn-success" type="submit"> Add the Clinic Type!</button>
</form>



  @endsection