@extends('layouts.master')

@section('head')

<link rel="stylesheet" href="/css/partyplanner.css">

@stop

@section('content')

<div class="container">
<div id= "vendor_edit">


{{ Form::model($vendor, array('route' => ['vendors.update', $vendor->id], 'id' => 'v-edit', 'method' => 'PUT', 'class' => 'spacer pure-form pure-form-stacked')) }}
    <fieldset>

        {{Form::hidden('user_id', Auth::id())}}

        <legend>Edit Account</legend>
        <label>Service Name</label>
        {{Form::text('vendor_name')}}
        {{ $errors->first('vendor_name', '<span class="help-block">:message</span>') }}
        
        <label for="address">Address</label>
        {{Form::text('address')}}
        {{ $errors->first('address', '<span class="help-block">:message</span>') }}
        
        <label for="city">City</label>
        {{Form::text('city')}}
        {{ $errors->first('city', '<span class="help-block">:message</span>') }}
        
        <label for="state">State</label>
        {{Form::text('state')}}
        {{ $errors->first('state', '<span class="help-block">:message</span>') }}
        
        <label for="zip">ZIP</label>
        {{Form::text('zip_code')}}
        {{ $errors->first('ZIP', '<span class="help-block">:message</span>') }}

            <h3>What service do you offer?</h3>    
        <div class="radio">
        	{{Form::radio('service_id', 1)}} Balloons <br>
        	{{Form::radio('service_id', 2)}} Catering <br>
        	{{Form::radio('service_id', 3)}} DJ <br>
         
        </div>
        
       
    </fieldset>
    	<H3>In a sentence, describe your service to potential customers</h3>
          	{{Form::textarea('description')}}

           <button type="submit" class="pure-button pure-button-primary">Edit Service</button>
 
{{ Form::close() }}

        


</div>
</div>

@stop