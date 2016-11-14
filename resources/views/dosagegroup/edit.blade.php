@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('dosagegroup.update',$dg->id)}}" method="post">
{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<label for="LableDosageGroupName"> Dosage Group Name </label>
	<input type="text" id="DosageGroup" name="DosageGroup" value="{{$dg->DosageGroup}}">
	    <button class="btn btn-success" type="submit">Modify the Dosage Group!</button>

</form>

  @endsection