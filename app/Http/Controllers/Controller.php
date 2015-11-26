<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->viewShareSection();
    }

    /**
     * @param array  $attr
     * @param string $tag
     *
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
     * Get redirect path.
     *
     * @return string
     */
    protected function redirectPath()
    {
        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }

    protected function viewShareSection()
    {
        view()->share('section', property_exists($this, 'section') ? $this->section : '');
    }
}
