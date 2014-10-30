<?php

class Work extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		'duration' => 'numeric'
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'description', 'member_id', 'duration', 'inidate', 'enddate', 'completed'];
	
	public function member()
  {
      return $this->belongsTo('Member');
  }

}