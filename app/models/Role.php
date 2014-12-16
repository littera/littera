<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Role extends BaseEloquent
{
	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

	/**
	 * The registered rules
	 *
	 * @var array
	 */
	protected $rules = [
		'name' => 'required',
		'description' => '',
	];
}