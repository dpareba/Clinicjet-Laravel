@extends('layouts.master')


@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('state.create')}}"> Add State</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
			@if(isset($StateName))
			 @foreach($StateName as $StateNames)
			 <article class="post" data-countryId="{{$StateNames->id}}">
					{{$StateNames->country->CountryName}}
					{{$StateNames->StateName}}
					<a href="{{route('state.edit',$StateNames->id)}}"> Edit </a>	|
					<a href="{{route('state.show',$StateNames->id)}}"> Delete </a>	

			 </article>		
			@endforeach	
			@endif
	</div>
</div>


@endsection