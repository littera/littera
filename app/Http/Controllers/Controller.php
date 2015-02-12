<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;


abstract class Controller extends BaseController
{

    use DispatchesCommands, ValidatesRequests;

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
    protected function validator($data, $rules, $attr = [])
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
