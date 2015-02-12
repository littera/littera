<?php namespace App\Models;

use App\Models\Traits\Rules;
use Illuminate\Database\Eloquent\Model as BaseModel;


abstract class Model extends BaseModel
{

    use Rules;

    /**
     * The registered rules
     *
     * @var array
     */
    protected $rules = [];
}