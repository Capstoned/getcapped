@extends('layouts.master')


@section('content')

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

{{-- {{ Form::open(array('class' => 'pure-form pure-form-stacked spacer', 'action' => "VendorsController@store"))}} --}}
     {{--    <fieldset>
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
        </fieldset> --}}
{{-- {{ Form::close() }} --}}

{{ Form::open(array('action' => 'VendorsController@store', 'id' => 'v-form', 'method' => 'post', 'class' => 'spacer pure-form pure-form-stacked')) }}
    <fieldset>
        <legend>Create Account</legend>
        <label>Service Name</label>
        <input type="text" name="vendor_name" value="{{Input::old('vendor_name ')}}">
        {{ $errors->first('vendor_name', '<span class="help-block">:message</span>') }}
 
        <label for="username">Username</label>
        <input name="username" id="username" type="text" placeholder="Username">
        {{ $errors->first('username', '<span class="help-block">:message</span>') }}
        
        <label for="email">Email</label>
        <input name="email" id="email" type="email" placeholder="Email">
        {{ $errors->first('email', '<span class="help-block">:message</span>') }}

        <label for="password">Password</label>
        <input name="password" id="password" type="password">
        {{ $errors->first('password', '<span class="help-block">:message</span>') }}

        <label for="address">Address</label>
        <input name="address" id="address" type="text" placeholder="Address">
        {{ $errors->first('address', '<span class="help-block">:message</span>') }}
        
        <label for="city">City</label>
        <input name="city" id="city" type="text" placeholder="City">
        {{ $errors->first('city', '<span class="help-block">:message</span>') }}
        
        <label for="state">State</label>
        <input name="state" id="state" type="text" placeholder="State">
        {{ $errors->first('state', '<span class="help-block">:message</span>') }}
        
        <label for="zip">ZIP</label>
        <input name="zip_code" id="ZIP" type="text" placeholder="ZIP">
        {{ $errors->first('ZIP', '<span class="help-block">:message</span>') }}

            <h3>What service do you offer?</h3>    
        <div class="radio">
          <input type="radio" name="serviceCode" id="balloons" value="0"> Balloons <br>
          <input type="radio" name="serviceCode" id="catering" value="1"> Catering <br>
          <input type="radio" name="serviceCode" id="dj" value="2"> DJ <br>
        </div>
        
        <button type="submit" class="pure-button pure-button-primary">Create Account</button>
    </fieldset>
{{ Form::close() }}

        <H3>In a sentence, describe your service to potential customers</h3>
          <textarea name="description" form="v-form"></textarea>
 


@stop