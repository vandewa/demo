<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxUnitmedisProperty
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property integer property_no
 * @property integer root_no
 * @property string property_nm
 * @property string referensi_value
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxUnitmedisProperty extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_unitmedis_property';






    protected $primaryKey = 'medicalunit_cd';

    public $fillable = [
        'property_no',
        'root_no',
        'property_nm',
        'referensi_value',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medicalunit_cd' => 'string',
        'property_no' => 'integer',
        'root_no' => 'integer',
        'property_nm' => 'string',
        'referensi_value' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'property_no',
        'root_no',
        'property_nm',
        'referensi_value',
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
