

<style type="text/css">
  .partytype{
    float:left;
  }
  .service{
    float: left;
    padding-left: 40px;
  }

  .spacer {
    padding-top: 300px;
  }
</style>



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

{{-- <div class ="spacer"></div> --}}

{{Form::open(array('method' => 'POST', 'action' => 'PartiesController@store', 'class' => 'pure-form spacer form-box-two'))}}

{{Form::hidden('user_id', Auth::id())}}





{{ Form::label ('party_type', 'Select Your Party Type')}}
<h2> Select Your Party Type</h2>


{{Form::radio('party_type', '0')}} Child's Birthday
<br>
{{Form::radio('party_type', '1')}} Anniversary
<br>
{{Form::radio('party_type', '2')}} Adult's Birthday
<br>
{{Form::radio('party_type', '3')}} Other
<br>


{{ Form::label ('service_code', 'Select Desired Services')}}
<h2> Select Desired Services</h2>

{{Form::checkbox('service_code', '0')}} Balloons
<br>
{{Form::checkbox('service_code', '1')}} DJ
<br>
{{Form::checkbox('service_code', '2')}} Catering
<br>



{{ Form::label ('address', 'Select Party Location')}}
<h2> Select Party Location</h2>

{{ Form::label ('address', 'Address')}}
<br>
{{Form::text('address', 'Address')}}
<br>

{{ Form::label ('city', 'City')}}
<br>
{{Form::text('city', 'City')}}
<br>

{{ Form::label ('state', 'State')}}
<br>
{{Form::text('state', 'State')}}
<br>

{{ Form::label ('zip_code', 'Zip Code')}}
<br>
{{Form::text('zip_code', 'Zip')}}
<br>

{{ Form::label ('comments', 'Comments')}}
<br>
{{Form::textarea('comments', null, ['size' => '30x5'])}}
<br>

{{ Form::label ('Submit', 'Submit')}}
<br>
{{ Form::submit('Submit', array('class' => 'btn')) }}

{{Form::close()}}



