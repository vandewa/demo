<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreConfigurations
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string name
 * @property string value
 */
class CoreConfigurations extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_configurations';






    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'value' => 'string'
    ];

    protected static $logAttributes = [
        'name',
        'value'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
