<?php namespace Littera\System\Traits;

trait RulesTrait {

	/**
	 * Get all registered rules
	 *
	 * @return array
	 */
	public function getRules()
	{
		return $this->rules;
	}

}