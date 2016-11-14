@extends('layouts.master')


@section('content')
@include('include.message-block')
<form action="{{route('dosetype.store')}}" method="post">
  {{csrf_field()}}
  
  <div class="form-group">
    <label for="dosegroup">Dosage Group</label>
    <select name="doseagegroup_id" id="doseagegroup_id">
    <option value=""> Select Dosage Group</option>
    @foreach($dg as $dgs)

    <option value="{{$dgs->id}}">{{$dgs->DosageGroup}}</option>

    @endforeach
      
    </select>

  </div>
   <div>
     <label for="dosetype">Dose Type</label>
     <input class="form-control" type="text" name="dosetype" id="dosetype">
   </div>
   <button class="btn btn-success" type="submit"> Add the Dose Type!</button>
</form>



  @endsection