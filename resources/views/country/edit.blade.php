@extends('layouts.master')


@section('content')
@include('include.message-block')

{!! Form::model($country, ['method' => 'PATCH', 'action' => ['Admin\CountryController@update',$country->id]]) !!}

    <div class="form-group">
      {!! Form::label('LableCountryName', 'CountryName') !!}
      {!! Form::text('CountryName',null, ['class' => 'form-control']) !!}
    </div>


    <button class="btn btn-success" type="submit">Modify the Country!</button>

  {!! Form::close() !!}



  @endsection