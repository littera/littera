<?php

use Carbon\Carbon;

if (!function_exists('lh_date')) {
    /**
     * @param string $date
     * @param string $format
     * @param string $default
     *
     * @return string
     */
    function lh_date($date, $format = \App\Support\DateTime::INTERNATIONAL_FORMAT, $default = 'N/A')
    {
        if ($date === null || $date === 0) {
            return $default;
        }

        if (filter_var($date, FILTER_VALIDATE_INT)) {
            return Carbon::createFromTimestamp($date)->format($format);
        }

        return Carbon::parse($date)->format($format);
    }
}
