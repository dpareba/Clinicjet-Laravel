@extends('layouts.master')


@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('clinictype.create')}}"> Add Clinic Type</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
			@if(isset($clinictype))
			 @foreach($clinictype as $clinictypes)
			 <article class="post">
					{{$clinictypes->ClinicType}}
					<a href="{{route('clinictype.edit',$clinictypes->id)}}"> Edit </a>	|
					<a href="{{route('clinictype.show',$clinictypes->id)}}"> Delete </a>	

			 </article>		
			@endforeach	
			@endif
	</div>
</div>


@endsection