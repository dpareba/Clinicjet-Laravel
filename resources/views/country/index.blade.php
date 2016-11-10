@extends('layouts.master')


@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('country.create')}}"> Add Country</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
			@if(isset($CountryName))
			 @foreach($CountryName as $CountryNames)
			 <article class="post" data-countryId="{{$CountryNames->id}}">
					{{$CountryNames->CountryName}}
					<a href="{{route('country.edit',$CountryNames->id)}}"> Edit </a>	|
					<a href="{{route('country.show',$CountryNames->id)}}"> Delete </a>	

			 </article>		
			@endforeach	
			@endif
	</div>
</div>


@endsection