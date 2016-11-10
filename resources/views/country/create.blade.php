@extends('layouts.master')


@section('content')
@include('include.message-block')
{!! Form::model($country, ['route' => 'country.store']) !!}

    <div class="form-group">
      {!! Form::label('countryname', 'CountryName') !!}
      {!! Form::text('addcountry', '', ['class' => 'form-control']) !!}
    </div>


    <button class="btn btn-success" type="submit">Add the Country!</button>

  {!! Form::close() !!}

  @endsection