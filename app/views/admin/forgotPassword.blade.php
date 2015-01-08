@extends('layouts.master')

@section('title') Forgot Password @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4' style="border:1px solid #575452; background-color:#3DB0FC;color:#FFFFFF;margin-top: 10%;">

    <h2> Forgot Password </h2>
    
    <div style="border:1px solid;width:100%; margin-bottom:10px;"></div>

    <div style="font-size:12pt">Please enter your email address to reset your password.</div>

    {{ Form::open(['role' => 'form']) }}

    @if (Session::get("error"))
      <div class='bg-danger alert'>{{ Session::get("error") }}</div>
    @endif
    @if (Session::get("status"))
      <div class='alert alert-success'>{{ Session::get("status") }}</div>
    @endif

    <div class='form-group'>
        <div style="float:left;">
            {{ Form::label('email', 'Email') }}
        </div>
        <div style="float:left;">
            {{ Form::text('email',  Input::old("email"), ['class' => 'form-control']) }}
            {{ $errors->first("email") }}<br />
        </div>
    </div>

    <div class='form-group'>
        <div style="float: left;">
            {{ Form::label('', '') }}
        </div>
        <div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) }}
        </div>
    </div>

  {{ Form::close() }}

</div>

@stop
