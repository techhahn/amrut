<?php

class Area extends \Eloquent {
	protected $fillable = [];

    protected $table = 'town';

    public static $rules = array(
        'TownName' => 'required|alpha_num|max:50',
    );
}