@extends('layouts.master')

@section('content')

<div class="partytype">




{{-- Verify that this CONTROLLER is correct --}}
<style type="text/css">
  .partytype{
    float:left;
  }
  .service{
    float: left;
    padding-left: 40px;
  }

  .spacer {
    padding-top: 200px;
  }
</style>

{{ Form::open(array('class' => 'pure-form pure-form-stacked spacer', 'action' => "UsersController@store"))}}
        <fieldset>
            <legend>Create Account</legend>

            <label for="username">Username</label>
            <input id="username" name = "username" type="text" placeholder="Username">
            {{ $errors->first('username', '<span class="help-block">:message</span>') }}
            <br>

            <label for="email">Email</label>
            <input id="email" name = "email" type="email" placeholder="Email">
            {{ $errors->first('email', '<span class="help-block">:message</span>') }}
            <br>

            <label for="password">Password</label>
            <input id="password" name = "password" type="password">
            {{ $errors->first('password', '<span class="help-block">:message</span>') }}
            <br>

            <button type="submit" class="pure-button pure-button-primary">Create Account</button>
        </fieldset>
{{ Form::close() }}


  @stop