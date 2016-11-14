@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('gender.destroy',$gender->id)}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="DELETE">
	<div class="form-group">
		<label for="Lablegendername"> Gender Name</label>
		<label for="CountryName">{{$gender->GenderName}}</label>

	</div>
    <button class="btn btn-success" type="submit">Delete the Gender!</button>

</form>


  @endsection