<?php

class PartiesController extends BaseController {

	/**
	 * Display a listing of parties
	 *
	 * @return Response
	 */
	public function index()
	{
		$parties = Party::all();

		return View::make('parties.index', compact('parties'));
	}

	/**
	 * Show the form for creating a new party
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('parties.create');
	}

	/**
	 * Store a newly created party in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Party::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Post not saved');
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
			$party = new Party();
			$party->user_id = Input::get('user_id');
			$party->party_type = Input::get('party_type');
			$party->comments = Input::get('comments');
			$party->event_date = Input::get('event_date');
			$party->event_status = 0;
			$party->address = Input::get('address');
			$party->city = Input::get('city');
			$party->state = Input::get('state');
			$party->zip_code = Input::get('zip_code');
			$party->save();
	
			// Attach service types for pivot table
			$serviceTypes = Input::get('service_id');
			
			foreach ($serviceTypes as $serviceType)
			{
				$party->services()->attach($serviceType);
				// $party->	
			};
	
			Session::flash('successMessage', 'Saved successfully');
			return Redirect::back()->withInput();
	}

	/**
	 * Display the specified party.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$party = Party::findOrFail($id);

		return View::make('parties.show', compact('party'));
	}

	/**
	 * Show the form for editing the specified party.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$party = Party::find($id);

		return View::make('parties.edit', compact('party'));
	}

	/**
	 * Update the specified party in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make($data = Input::all(), Party::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Post not saved');
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
			$party = Party::findOrFail($id);
			$party->user_id = Input::get('user_id');
			$party->party_type = Input::get('party_type');
			$party->comments = Input::get('comments');
			$party->event_date = Input::get('event_date');
			$party->event_status = 0;
			$party->address = Input::get('address');
			$party->city = Input::get('city');
			$party->state = Input::get('state');
			$party->zip_code = Input::get('zip_code');
			$party->services()->detach();
			$party->save();
	

			$serviceTypes = Input::get('service_id');
			
			foreach ($serviceTypes as $serviceType)
			{
				$party->services()->attach($serviceType);
	
			};
	
			Session::flash('successMessage', 'Saved successfully');
			return Redirect::back()->withInput();
	}
	

	/**
	 * Remove the specified party from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Party::destroy($id);

		return Redirect::route('parties.index');
	}


}
