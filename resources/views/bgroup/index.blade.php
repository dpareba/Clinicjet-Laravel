
@extends('layouts.master')

@section('content')

@include('include.message-block')

<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('bgroup.create')}}"> Add Blood Group</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
		@if(isset($bg))
			@foreach($bg as $bgs)
			 <article>
					{{$bgs->BloodGroup}}
					<a href="{{route('bgroup.edit',$bgs->id)}}"> Edit </a>	|
					<a href="{{route('bgroup.show',$bgs->id)}}"> Delete </a>	
			 </article>		
			@endforeach	
		@endif
	</div>
</div>

@endsection
