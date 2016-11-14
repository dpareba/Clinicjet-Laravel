@extends('layouts.master')


@section('content')
@include('include.message-block')
<form action="{{route('brandname.store')}}" method="post">
  {{csrf_field()}}
  
  <div class="form-group">
    <label for="dosetype">Dose Type</label>
    <select name="dosetype_id" id="dosetype_id">

    @foreach($dt as $dts)

    <option value="{{$dts->id}}">{{$dts->DoseType}}</option>

    @endforeach
      
    </select>

  </div>
   <div>
     <label for="BrandName">Brand Name</label>
     <input class="form-control" type="text" name="BrandName" id="BrandName">
   </div>
   <button class="btn btn-success" type="submit"> Add the Brand Name!</button>
</form>



  @endsection