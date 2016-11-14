@extends('layouts.master')


@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('dosetype.create')}}"> Add Dose Type</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
			@if(isset($dt))
			 @foreach($dt as $dts)
			 <article class="post">
					{{$dts->Dosagegroup->DosageGroup}}
					{{$dts->DoseType}}
					<a href="{{route('dosetype.edit',$dts->id)}}"> Edit </a>	|
					<a href="{{route('dosetype.show',$dts->id)}}"> Delete </a>	

			 </article>		
			@endforeach	
			@endif
	</div>
</div>


@endsection