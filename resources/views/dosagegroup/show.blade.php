@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('dosagegroup.destroy',$dg->id)}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="DELETE">
	<div class="form-group">
		<label for="LableDosageGroupName"> Dosage Group Name</label>
		<label for="dosagegroup">{{$dg->DosageGroup}}</label>

	</div>
    <button class="btn btn-success" type="submit">Delete the Dosage Group!</button>

</form>


  @endsection