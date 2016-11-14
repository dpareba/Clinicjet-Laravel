@extends('layouts.master')


@section('content')	
@include('include.message-block')

<form action="{{route('dosagegroup.store')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="labelCountryName"> Dosage Group </label>
		<input class="form-control" type="text" name="dosagegroup" id="dosagegroup">
	</div>
	<button class="btn btn-success" type="submit">Add the DosageGroup!</button>
</form> 

  @endsection