<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxRsType
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string rstp_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxRsType extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_rs_type';






    protected $primaryKey = 'rstp_cd';

    public $fillable = [
        'rstp_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rstp_cd' => 'string',
        'rstp_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'rstp_nm',
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
