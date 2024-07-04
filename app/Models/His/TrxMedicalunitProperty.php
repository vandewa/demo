<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalunitProperty
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property bigInteger medical_unit_seqno
 * @property integer property_no
 * @property string property_value
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalunitProperty extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medicalunit_property';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_unit_seqno',
        'property_no',
        'property_value',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'property_no' => 'integer',
        'property_value' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_unit_seqno',
        'property_no',
        'property_value',
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
