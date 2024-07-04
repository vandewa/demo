<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxClinicalPath
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string cp_nm
 * @property string icd_cd
 * @property integer los
 * @property string cp_tp_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxClinicalPath extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_clinical_path';






    protected $primaryKey = 'cp_cd';

    public $fillable = [
        'cp_nm',
        'icd_cd',
        'los',
        'cp_tp_cd',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cp_cd' => 'string',
        'cp_nm' => 'string',
        'icd_cd' => 'string',
        'los' => 'integer',
        'cp_tp_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'cp_nm',
        'icd_cd',
        'los',
        'cp_tp_cd',
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
