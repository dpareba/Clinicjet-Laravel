@extends('layouts.master')


@section('content')
@include('include.message-block')

{!! Form::model($state, ['method' => 'PATCH', 'action' => ['Admin\StateController@update',$state->id]]) !!}

    <div class="form-group">
      {!! Form::label('LableCountryName', 'Country Name') !!}
      {!! Form::select('country_id',$country,null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
      {!! Form::label('LableStateName', 'State Name') !!}
      {!! Form::text('StateName',null, ['class' => 'form-control']) !!}
    </div>


    <button class="btn btn-success" type="submit">Modify the State!</button>

  {!! Form::close() !!}



  @endsection