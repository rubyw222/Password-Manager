<?php

class RecordController extends BaseController {

	/**
	 * Create new password record
	 */
	public function createRecord() {
		return View::make('pages.create')
			->with('title', 'Create password record');
	}
	
	/**
	 * add new pasword record to DB
	 */
	public function actionCreate() {
		// attempt to create row in database
		if (Record::create(Input::all())) {
			return Redirect::to('passwords')
				->with('flash_notice', 'You have successfully added a new password record.')
				->with('title', 'List passwords');
		}
		
		// redirect back to create form if create is unsuccessful
		return Redirect::to('create')
			->with('flash_notice', 'Unable to create record at this time, please try again.')
			->with('title', 'Create password record')
			->withInput();
	}
}
