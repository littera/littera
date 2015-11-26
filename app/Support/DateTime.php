<?php

namespace App\Support;

use RuntimeException;

final class DateTime
{
    const DB_TIMESTAMP = 'Y-m-d H:i:s';
    const INTERNATIONAL_FORMAT = 'd-m-Y H:i:s';
    const RUSSIAN_FORMAT = 'd.m.Y H:i:s';

    public function __construct()
    {
        throw new RuntimeException('Can\'t get an instance.');
    }
}
