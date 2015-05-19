@extends('layouts.master')

@section('head')
<title>User Signup</title>
<link rel="stylesheet" href="/css/partyplanner.css">

@section('content')


  @if($errors->all())
    <div class="alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
<section>
    <div class="container signup-form">
        <h1>Create Your Account</h1>
    <hr>
    {{ Form::open(array('action' => 'UsersController@store' )) }}
      <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Input::old('username'), array('placeholder' => 'Enter Username', 'class' => 'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('placeholder' => 'Enter Email', 'class' => 'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('placeholder' => 'Enter Password', 'class' => 'form-control')) }}
      </div>
    <hr>
      <button type="submit" class="btn btn-default form-btn">Submit</button>
  {{ Form::close() }}
  </div>
</section>
  @stop