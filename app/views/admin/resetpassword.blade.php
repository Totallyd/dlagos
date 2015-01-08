@extends('layouts.master')

@section('title') Login @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4' style="border:1px solid #575452; background-color:#3DB0FC;color:#FFFFFF;margin-top: 10%;">

    <h2> Reset Password </h2>
    
    <div style="border:1px solid;width:100%; margin-bottom:10px;"></div>

    {{ Form::open() }}

    @if (Session::get("error"))
      <div class='bg-danger alert'>{{ Session::get("error") }}</div>
    @endif

    <div class='form-group'>
        <div style="float:left;">
            {{ Form::label('email', 'Email') }}
        </div>
        <div style="float:left;">
            {{ Form::text('email',  null, ['placeholder' => 'Enter your Email', 'class' => 'form-control']) }}
            {{ $errors->first("email") }}<br />
        </div>
    </div>

    <div class='form-group'>
        <div style="float:left;">
            {{ Form::label('password', 'Password') }}
        </div>
        <div style="float:left;">
            {{ Form::password('password', ['placeholder' => 'Enter new Password', 'class' => 'form-control']) }}
            {{ $errors->first("password") }}<br />
        </div>
    </div>

     <div class='form-group'>
        <div style="float: left;">
            {{ Form::label('password_confirmation', 'Confirm') }}
        </div>
        <div style="float:left;">
            {{ Form::password('password_confirmation',['placeholder' => 'Re-Enter new Password', 'class' => 'form-control']) }}
            {{ $errors->first("password_confirmation") }}<br />
        </div>
    </div>
    {{ Form::hidden('token', $token) }}
    <div class='form-group'>
        <div style="float: left;">
            {{ Form::label('', '') }}
        </div>
        <div>
            {{ Form::submit('Reset', ['class' => 'btn btn-primary btn-lg']) }}
        </div>
    </div>

  {{ Form::close() }}

</div>

@stop
