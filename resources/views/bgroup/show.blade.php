@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('bgroup.destroy',$bg->id)}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="DELETE">
	<div class="form-group">
		<label for="LableBloodGroupName"> Blood Group Name</label>
		<label for="bloodgroup">{{$bg->BloodGroup}}</label>

	</div>
    <button class="btn btn-success" type="submit">Delete the Blood Group!</button>

</form>


  @endsection