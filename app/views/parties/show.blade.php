

@foreach(Auth::user()->parties as $userParty)
	

	<div>
	
	<h2>Party Type</h2>
	
	{{Party::$partyTypes[$userParty->party_type] }}
	<br>

	<h2>Event Date</h2>
	{{ $userParty->getEventDate('event_date')->first() }}
	<br>
	
	<h2>Services Requested</h2>


	{{ $userParty->service_id }}

	<h2>Address</h2>
	{{ $userParty->address }}
	<br>
	{{ $userParty->city }}
	<br>
	{{ $userParty->state }}
	<br>
	{{ $userParty->zip_code }}
	
	<h2>Comments</h2>
	{{ $userParty->comments }}

	</div>

@endforeach