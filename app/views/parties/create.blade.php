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

<body>

{{-- 'party_type' => 'required',
		'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip_code' => 'required',
		'event_date' => 'required'

public static $partyTypes = ['0' => 'childBday', 
						'1' => 'anniversary', 
						'2' => 'adultBday', 
						'3' => 'other']; --}}


{{Form::open(array('method' => 'POST', 'action' => 'PartiesController@store', 'class' => 'pure-form'))}}

{{ Form::label ('party_type', 'Select Your Party Type')}}
<br>
{{Form::radio('party_type', '0')}}
{{Form::radio('party_type', '1')}}
{{Form::radio('party_type', '2')}}
{{Form::radio('party_type', '3')}}
<br>
{{ Form::label ('address', 'Address')}}
{{Form::text('address', 'Address')}}
<br>
{{ Form::label ('city', 'City')}}
{{Form::text('city', 'City')}}
<br>
{{ Form::label ('state', 'State')}}
{{Form::text('state', 'State')}}
<br>
{{ Form::label ('zip_code', 'Zip Code')}}
{{Form::text('zip_code', 'Zip')}}
<br>
{{ Form::label ('Submit', 'Submit')}}
{{ Form::submit('Submit', array('class' => 'btn')) }}
<br>
{{Form::close()}}



</body>