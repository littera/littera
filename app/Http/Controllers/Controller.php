<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Validator;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * @param  array  $attr
     * @param  string  $tag
     * @return array
     */
    protected function embed($attr, $tag)
    {
        $result = [];

        foreach ($attr as $k => $v) {
            $result[$k] = "<{$tag}>{$v}</{$tag}>";
        }

        return $result;
    }

    /**
     * @param  Request  $request
     * @param  array  $rules
     * @param  array  $attr
     * @param  string  $tag
     * @return array|bool
     */
    protected function validator(Request $request, array $rules, array $attr = [], $tag = 'strong')
    {
        // Avoid unnecessary parameters
        $target_data = array_intersect_key($request->all(), $rules);

        $validator = Validator::make($target_data, $rules);

        if ($attr) {
            $validator->setAttributeNames($this->embed($attr, $tag));
        }

        if ($validator->fails()) {
            return [$validator->getMessageBag(), $target_data];
        }

        return [false, $target_data];
    }
}
