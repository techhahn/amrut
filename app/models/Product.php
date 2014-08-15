<?php

class Product extends \Eloquent {
	protected $fillable = [];

	protected $table = "product";
	protected $primarykey = "Code";

	public static $rules = array(
        
    );

}