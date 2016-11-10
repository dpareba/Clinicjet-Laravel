@extends('layouts.master')


@section('content')
@include('include.message-block')

{!! Form::model($country, ['method' => 'DELETE', 'action' => ['Admin\CountryController@destroy',$country->id]]) !!}

    <div class="form-group">
      {!! Form::label('LableCountryName', 'CountryName') !!}
      {!! Form::label('CountryName', $country->CountryName, ['class' => 'form-control']) !!}
    </div>


    <button class="btn btn-success" type="submit">Modify the Country!</button>

  {!! Form::close() !!}



  @endsection