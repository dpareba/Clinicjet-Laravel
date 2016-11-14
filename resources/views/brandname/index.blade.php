@extends('layouts.master')


@section('content')
@include('include.message-block')
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
			<a href="{{route('brandname.create')}}"> Add Brand Name</a>	
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">	
			@if(isset($bn))
			 @foreach($bn as $bns)
			 <article class="post">
					{{$bns->dosetype->DoseType}}
					{{$bns->BrandName}}
					<a href="{{route('brandname.edit',$bns->id)}}"> Edit </a>	|
					<a href="{{route('brandname.show',$bns->id)}}"> Delete </a>	

			 </article>		
			@endforeach	
			@endif
	</div>
</div>


@endsection