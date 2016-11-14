@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('gender.update',$gender->id)}}" method="post">
{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<label for="Lablegendername"> Gender Name </label>
	<input type="text" id="GenderName" name="GenderName" value="{{$gender->GenderName}}">
	    <button class="btn btn-success" type="submit">Modify the Gender!</button>

</form>

  @endsection