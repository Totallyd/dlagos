@extends('layouts.master')

@section('title') Login @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4' style="border:1px solid #575452; background-color:#3DB0FC;color:#FFFFFF;margin-top: 10%;">

    <h2> Admin Login <img height="34px" style="float:right;" src="{{{ URL::to('public/img/lock.png') }}}"></h2>
    
    <div style="border:1px solid;width:100%; margin-bottom:10px;"></div>

    {{ Form::open(['role' => 'form']) }}

    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif

    <div class='form-group'>
        <div style="float:left;">
            {{ Form::label('username', 'Username') }}
        </div>
        <div style="float:left;">
            {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}<br />
        </div>
    </div>

    <div class='form-group'>
         <div style="float:left;">
            {{ Form::label('password', 'Password') }}
        </div>
        <div style="float:left;">
            {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}<br />
        </div>
    </div>

    <div class="form-group">
        <div style="float:left;">
            {{ Form::checkbox('rememberme', 'true') }}
            {{ Form::label('rememberme', 'Remember Me!') }}
        </div>
        <div style="font-size:12pt;text-align:right;padding-right:10px">
            <a style="color:#FC7905;" href="{{{URL::to('admin/forgotpassword')}}}">Forgot Password</a>
        </div>
    </div>

    <br />

    <div class='form-group'>
        <div style="float: left;">
            {{ Form::label('', '') }}
        </div>
        <div>
            {{ Form::submit('Login', ['class' => 'btn btn-primary btn-lg']) }}
        </div>
    </div>

  {{ Form::close() }}

</div>

@stop
