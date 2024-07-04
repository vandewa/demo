<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxReferensi
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string reff_tp
 * @property string referensi_root
 * @property string referensi_nm
 * @property string dr_nm
 * @property string address
 * @property string phone
 * @property string info_01
 * @property string info_02
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxReferensi extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_referensi';




    public $incrementing = false;

    protected $guarded = [];

    protected $primaryKey = 'referensi_cd';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'referensi_cd' => 'string',
        'reff_tp' => 'string',
        'referensi_root' => 'string',
        'referensi_nm' => 'string',
        'dr_nm' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'info_01' => 'string',
        'info_02' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'reff_tp',
        'referensi_root',
        'referensi_nm',
        'dr_nm',
        'address',
        'phone',
        'info_01',
        'info_02',
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
