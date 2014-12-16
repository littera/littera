<?php

use Littera\System\Traits\RulesTrait;

class BaseEloquent extends Eloquent
{
    use RulesTrait;

    /**
     * The registered rules
     *
     * @var array
     */
    protected $rules = [];

}
