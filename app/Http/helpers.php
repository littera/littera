<?php

use Carbon\Carbon;

if ( ! function_exists('lh_choose'))
{
    /**
     * @param  int|string  $key
     * @param  array       $haystack
     * @param  string      $default
     * @return string
     */
    function lh_choose($key, array $haystack = array(), $default = '')
    {
        if (array_key_exists($key, $haystack))
        {
            return $haystack[$key];
        }

        return $default;
    }
}

if ( ! function_exists('lh_date'))
{
    /**
     * @param  string  $date
     * @param  string  $format
     * @return string
     */
    function lh_date($date, $format = 'd.m.Y H:i:s')
    {
        return Carbon::parse($date)->format($format);
    }
}
