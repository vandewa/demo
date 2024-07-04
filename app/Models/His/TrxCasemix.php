<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCasemix
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string icd_cd
 * @property string severity_cd
 * @property string casemix_nm
 * @property string casemix_tp_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxCasemix extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_casemix';






    protected $primaryKey = 'casemix_no';

    public $fillable = [
        'icd_cd',
        'severity_cd',
        'casemix_nm',
        'casemix_tp_cd',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'icd_cd' => 'string',
        'severity_cd' => 'string',
        'casemix_nm' => 'string',
        'casemix_tp_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'icd_cd',
        'severity_cd',
        'casemix_nm',
        'casemix_tp_cd',
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
