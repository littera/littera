<?php

class Image extends BaseEloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'images';

	/**
	 * The registered rules
	 *
	 * @var array
	 */
	protected $rules = [
		'path' => 'required',
		'alt' => '',
	];
}