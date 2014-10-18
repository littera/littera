<?php

class BaseController extends Controller
{
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	 * @param array $attr
	 * @param string $tag
	 * @return array
	 */
	protected function embed($attr, $tag = 'strong')
	{
		$result = [];

		foreach ($attr as $k => $v) {
			$result[$k] = "<{$tag}>{$v}</{$tag}>";
		}

		return $result;
	}

	/**
	 * @param array $data
	 * @param array $rules
	 * @param array $attr
	 * @return array|bool
	 */
	protected function validate($data, $rules, $attr = [])
	{
		// Avoid unnecessary parameters
		$target_data = array_intersect_key($data, $rules);

		$validator = Validator::make($target_data, $rules);

		if ($attr) {
			$validator->setAttributeNames($this->embed($attr));
		}

		if ($validator->fails()) {
			return [$validator->getMessageBag(), $target_data];
		}

		return [false, $target_data];
	}

}
