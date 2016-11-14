@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('bgroup.update',$bg->id)}}" method="post">
{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<label for="LableBloodGroupName"> Blood Group Name </label>
	<input type="text" id="BloodGroup" name="BloodGroup" value="{{$bg->BloodGroup}}">
	    <button class="btn btn-success" type="submit">Modify the Blood Group!</button>

</form>

  @endsection