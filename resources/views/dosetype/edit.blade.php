@extends('layouts.master')


@section('content')
@include('include.message-block')

<form action="{{route('dosetype.update',$dt->id)}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name='_method' value="PATCH">
  <div class="form-group">
    <label for="dosagegroup">Dosage Group</label>
    <select name="dosagegroup_id" id="dosagegroup_id">

    @foreach($dg as $dgs)
    @if($dgs->id==$dt->dosagegroup_id)
    <option selected value="{{$dgs->id}}">{{$dgs->DosageGroup}}</option>
    @else
    <option value="{{$dgs->id}}">{{$dgs->DosageGroup}}</option>
    @endif
    @endforeach
      
    </select>

  </div> 
   <div>
     <label for="dosetype">Dose Type</label>
     <input class="form-control" type="text" name="DoseType" id="DoseType" value="{{$dt->DoseType}}">
   </div>
   <button class="btn btn-success" type="submit"> Edit the Dose Type!</button>
</form>






  @endsection