<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvUnitMap
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string unit_conversion
 * @property decimal map_value
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvUnitMap extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_unit_map';






    protected $primaryKey = 'unit_cd';

    public $fillable = [
        'unit_conversion',
        'map_value',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'unit_cd' => 'string',
        'unit_conversion' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'unit_conversion',
        'map_value',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
