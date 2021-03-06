<?php

class RecordController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.create')
			->with('title', 'Create password record');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(
			Input::all(),
			array(
				'description' 	=> 'required',
				'username'		=> 'required',
				'password'		=> 'required',
			)
		);
		
		// attempt to create row in database
		if ($validator->passes() && Record::create(Input::all())) {
			return Redirect::to('passwords')
				->with('flash_notice', 'You have successfully added a new password record.')
				->with('title', 'List passwords');
		}
		
		// redirect back to create form if create is unsuccessful
		return Redirect::route('record.create')
			->withErrors($validator)
			->with('flash_notice', 'Unable to create record at this time, please try again.')
			->with('title', 'Create password record')
			->withInput();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get record we want to edit
		$record = Record::findOrFail($id);
		
		return View::make('pages.edit')
			->with('record', $record)
			->with('title', 'Edit record');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(
			Input::all(),
			array(
				'description' 	=> 'required',
				'username'		=> 'required',
				'password'		=> 'required',
			)
		);
		
		// get record we want to update
		$record = Record::findOrFail($id);
		$record->fill(Input::all());
		
		if ($validator->passes() && $record->save()) {
			return Redirect::to('passwords')
				->with('flash_notice', 'Successfully updated record.')
				->with('title', 'List passwords');
		}
		
		// redirect back to edit form if save is unsuccessful
		return Redirect::route('record.edit', $id)
			->withErrors($validator)
			->with('flash_notice', 'Unable to update record at this time, please try again.')
			->with('title', 'Create password record')
			->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//get record we want to delete
		$record = Record::findOrFail($id);
		
		if ($record->delete()) {
			return Redirect::to('passwords')
				->with('flash_notice', 'Successfully deleted record.')
				->with('title', 'List passwords');
		}
		
		return Redirect::to('passwords')
				->with('flash_notice', 'Unable to delete record at this time, please try again.')
				->with('title', 'List passwords');
	}


}
