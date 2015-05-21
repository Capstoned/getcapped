@extends('layouts.master')

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

<body>

{{Form::open(array('method' => 'POST', 'action' => 'PartiesController@store', 'class' => 'pure-form spacer'))}}

{{Form::hidden('user_id', Auth::id())}}


{{ Form::label ('party_type', 'Select Your Party Type')}}
<br>

{{Form::radio('party_type', '0')}} Child's Birthday 
<br>
{{Form::radio('party_type', '1')}} Anniversary      
<br>
{{Form::radio('party_type', '2')}} Adult's Birthday 
<br>
{{Form::radio('party_type', '3')}} Other            
<br>

{{ Form::label ('event_date', 'Select Your Party Date')}}
{{ Form::input('date', 'event_date', null, array())}}
<br>

{{ Form::label ('service_id', 'Select Desired Services')}}
<br>

{{Form::checkbox('service_id[]', '1')}} Balloons
<br>
{{Form::checkbox('service_id[]', '2')}} DJ
<br>
{{Form::checkbox('service_id[]', '3')}} Catering
<br>



{{ Form::label ('address', 'Select Party Location')}}
<br>

{{ Form::label ('address', 'Address')}}
<br>
{{Form::text('address', null, array('placeholder' =>'Address'))}}
<br>

{{ Form::label ('city', 'City')}}
<br>
{{Form::text('city', null, array('placeholder' =>'City'))}}
<br>

{{ Form::label ('state', 'State')}}
<br>
{{Form::text('state', null, array('placeholder' =>'State'))}}
<br>

{{ Form::label ('zip_code', 'Zip Code')}}
<br>
{{Form::text('zip_code', null, array('placeholder' =>'ZIP Code'))}}
<br>

{{ Form::label ('comments', 'Comments')}}
<br>
{{Form::textarea('comments', null, ['size' => '30x5'])}}
<br>

{{ Form::label ('Submit', 'Submit')}}
<br>
{{ Form::submit('Submit', array('class' => 'btn')) }}

{{Form::close()}}



</body>