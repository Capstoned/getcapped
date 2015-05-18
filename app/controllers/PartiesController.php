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
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Party::create($data);

		return Redirect::route('parties.index');
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
		$party = Party::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Party::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$party->update($data);

		return Redirect::route('parties.index');
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
