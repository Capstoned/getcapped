<?php

class VendorsController extends BaseController {

	/**
	 * Display a listing of vendors
	 *
	 * @return Response
	 */
	public function index()
	{
		$vendors = Vendor::all();

		return View::make('vendors.index', compact('vendors'));
	}

	/**
	 * Show the form for creating a new vendor
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('vendors.create');
	}

	/**
	 * Store a newly created vendor in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Vendor::$rules);

		if ($validator->fails())
		{
			$dd($errors);
			Session::flash('errorMessage', 'Vendor Create Error');
			return Redirect::back()->withErrors($validator)->withInput();
		}
			Session::flash('successMessage', 'Saved successfully');
			Vendor::create(Input::except('_token'));
			// Vendor::create($data);

		return Redirect::to('/vendor-dash');
	}



	/**
	 * Display the specified vendor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		// $vendor = Vendor::findOrFail($id);

		// return View::make('vendors.show', compact('vendor'));

		$id = Auth::id();
		// dd($id);
		$vendor = Vendor::where('user_id', $id)->first();
	
		return View::make('vendors.vendors-dash')->with(['vendor'=> $vendor]);

	}

	/**
	 * Show the form for editing the specified vendor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vendor = Vendor::find($id);

		return View::make('vendors.edit', compact('vendor'));
	}

	/**
	 * Update the specified vendor in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$vendor = Vendor::findOrFail($id);

		$data = Input::all();
		$validator = Validator::make($data, Vendor::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Post not saved');
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
		$vendor->update($data);

		Session::flash('successMessage', 'Saved successfully');
		return Redirect::back()->withInput();
	}

	/**
	 * Remove the specified vendor from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Vendor::destroy($id);

		return Redirect::route('vendors.index');
	}

	public function showDash()
	{
		$id = Auth::id();
		dd($id);
		$vendor = Vendor::where('user_id', $id)->first();
	
		return View::make('vendors.vendors-dash')->with(['vendor'=> $vendor]);
	}
}
