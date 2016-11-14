@extends('layouts.master')


@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('gender.create')}}"> Add Gender</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
			@if(isset($gender))
			 @foreach($gender as $genders)
			 <article>
					{{$genders->GenderName}}
					<a href="{{route('gender.edit',$genders->id)}}"> Edit </a>	|
					<a href="{{route('gender.show',$genders->id)}}"> Delete </a>	

			 </article>		
			@endforeach	
			@endif
	</div>
</div>


@endsection