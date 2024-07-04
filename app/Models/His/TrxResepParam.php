<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxResepParam
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string resepparam_cd
 * @property string param_nm
 * @property string insurance_cd
 * @property decimal amount
 * @property string updatable
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxResepParam extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_resep_param';






    protected $primaryKey = 'resepparam_seqno';

    public $fillable = [
        'resepparam_cd',
        'param_nm',
        'insurance_cd',
        'amount',
        'updatable',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'resepparam_seqno' => 'integer',
        'resepparam_cd' => 'string',
        'param_nm' => 'string',
        'insurance_cd' => 'string',
        'updatable' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'resepparam_cd',
        'param_nm',
        'insurance_cd',
        'amount',
        'updatable',
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
