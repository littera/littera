<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The registered rules
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'target' => 'required',
    ];

}
