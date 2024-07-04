<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreGroups
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string name
 * @property string description
 */
class CoreGroups extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_groups';






    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    protected static $logAttributes = [
        'name',
        'description'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
