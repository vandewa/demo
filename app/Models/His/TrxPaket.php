<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxPaket
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string paket_nm
 * @property string medical_tp
 * @property string insurance_cd
 * @property string kelas_cd
 * @property decimal total_price
 * @property integer total_day
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxPaket extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_paket';






    protected $primaryKey = 'paket_cd';

    public $fillable = [
        'paket_nm',
        'medical_tp',
        'insurance_cd',
        'kelas_cd',
        'total_price',
        'total_day',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'paket_cd' => 'string',
        'paket_nm' => 'string',
        'medical_tp' => 'string',
        'insurance_cd' => 'string',
        'kelas_cd' => 'string',
        'total_day' => 'integer',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'paket_nm',
        'medical_tp',
        'insurance_cd',
        'kelas_cd',
        'total_price',
        'total_day',
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
