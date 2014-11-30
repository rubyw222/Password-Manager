<?php

class Record extends Eloquent {

	protected $table = 'manager';
	
	protected $fillable = array('description', 'url', 'username', 'password');
	
	protected $guarded = array('id');

}
