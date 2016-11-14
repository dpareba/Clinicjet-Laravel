@extends('layouts.master')

@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('clinicdetail.create')}}"> Add Clinic</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
		@if(isset($clinicdetail))
			@foreach($clinicdetail as $clinicdetails)
			 <article>
			 		{{$clinicdetails->ClinicName}}
			 		{{$clinicdetails->clinictype->ClinicType}}
					{{$clinicdetails->country->CountryName}}
					{{$clinicdetails->state->StateName}}
					{{$clinicdetails->city->CityName}}
					<a href="{{route('clinicdetail.edit',$clinicdetails->id)}}"> Edit </a>	|
					<a href="{{route('clinicdetail.show',$clinicdetails->id)}}"> Delete </a>	
			 </article>		
			@endforeach	
		@endif
	</div>
</div>
@endsection