
@extends('layouts.master')

@section('content')

@include('include.message-block')

<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('dosagegroup.create')}}"> Add Dosage Group</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
		@if(isset($dg))
			@foreach($dg as $dgs)
			 <article>
					{{$dgs->DosageGroup}}
					<a href="{{route('dosagegroup.edit',$dgs->id)}}"> Edit </a>	|
					<a href="{{route('dosagegroup.show',$dgs->id)}}"> Delete </a>	
			 </article>		
			@endforeach	
		@endif
	</div>
</div>

@endsection
