<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCasemixStandard
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string casemix_tp_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxCasemixStandard extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_casemix_standard';






    protected $primaryKey = 'casemix_tp_cd';

    public $fillable = [
        'casemix_tp_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'casemix_tp_cd' => 'string',
        'casemix_tp_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'casemix_tp_nm',
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
