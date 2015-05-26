@extends('layouts.master')

@section('content')


<div id= "vendor_edit">


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

{{ Form::open(array('action' => 'VendorsController@store', 'id' => 'v-edit', 'method' => 'POST', 'class' => 'spacer pure-form pure-form-stacked')) }}
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

           <button type="submit" class="pure-button pure-button-primary">Create Service</button>
 
{{ Form::close() }}

        


</div>

@stop