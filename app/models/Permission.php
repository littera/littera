<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Permission extends BaseEloquent
{
	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'permissions';

	/**
	 * The registered rules
	 *
	 * @var array
	 */
	protected $rules = [
		'name' => 'required',
		'target' => 'required',
	];
}