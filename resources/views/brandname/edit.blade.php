@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('brandname.update',$bn->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="PATCH">
  <div class="form-group">
    <label for="dosetype">Dose Type</label>
    <select name="dosetype_id" id="dosetype_id">

    @foreach($dt as $dts)
    @if($dts->id==$bn->dosetype_id)
    <option selected value="{{$dts->id}}">{{$dts->DoseType}}</option>
    @else
    <option value="{{$dts->id}}">{{$dts->DoseType}}</option>
    @endif
    @endforeach
      
    </select>

  </div>
   <div>
     <label for="brandname">Brand Name</label>
     <input class="form-control" type="text" name="BrandName" id="BrandName" value="{{$bn->BrandName}}">
   </div>
   <button class="btn btn-success" type="submit"> Edit Brand Name!</button>
</form>






  @endsection