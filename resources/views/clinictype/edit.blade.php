@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('clinictype.update',$clinictype->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="PATCH">
   <div>
     <label for="clinictype">Clinic Type</label>
     <input class="form-control" type="text" name="ClinicType" id="ClinicType" value="{{$clinictype->ClinicType}}">
   </div>
   <button class="btn btn-success" type="submit"> Edit Clinic Type!</button>
</form>






  @endsection