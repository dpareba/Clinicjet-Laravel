@extends('layouts.master')


@section('content')
@include('include.message-block')
{!! Form::model($country, ['route' => 'state.store']) !!}

    <div class="form-group">
       {!! Form::label('countryname', 'Country Name') !!}
       {!! Form::select('countryid', $country) !!}
      
    </div>

    <div class="form-group">
       {!! Form::label('statename', 'StateName') !!}
      {!! Form::text('addstate', '', ['class' => 'form-control']) !!}
    </div>


    <button class="btn btn-success" type="submit">Add the State!</button>

  {!! Form::close() !!}

  @endsection