@extends('layouts.master')

@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('city.create')}}"> Add City</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
		@if(isset($cityname))
			@foreach($cityname as $citynames)
			 <article>
					{{$citynames->country->CountryName}}
					{{$citynames->state->StateName}}
					{{$citynames->CityName}}
					<a href="{{route('city.edit',$citynames->id)}}"> Edit </a>	|
					<a href="{{route('city.show',$citynames->id)}}"> Delete </a>	
			 </article>		
			@endforeach	
		@endif
	</div>
</div>
@endsection