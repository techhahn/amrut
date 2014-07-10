<?php

class Town extends \Eloquent {
	protected $fillable = [];

	protected $table = 'town';

    public static $rules = array(
        'TownName' => 'required|max:50',
    );
}