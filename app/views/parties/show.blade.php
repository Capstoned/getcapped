
@foreach(Auth::user()->parties as $userParty)
	

	<div>
	
	<h4>Party Type</h4>
	
	{{Party::$partyTypes[$userParty->party_type] }}
	<br>

	<h4>Event Date</h4>
	{{ $userParty->getEventDate($userParty->event_date) }}
	<br>
	
	<h4>Services Requested</h4>
		<?php $services = $userParty->services; ?>
	@foreach($services as $service)
		{{ $service->description }} <br>
	@endforeach


	<h4>Address</h4>
	{{ $userParty->address }}
	<br>
	{{ $userParty->city }}
	<br>
	{{ $userParty->state }}
	<br>
	{{ $userParty->zip_code }}
	
	<h4>Comments</h4>
	{{ $userParty->comments }}

	</div>
	<br>

@endforeach