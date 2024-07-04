<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxShiftKasir
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string shift_cd
 * @property string user_id
 * @property string|\Carbon\Carbon time_start
 * @property string|\Carbon\Carbon time_end
 * @property decimal modal
 * @property decimal amount_tunai
 * @property decimal amount_non_tunai
 * @property string close_status
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxShiftKasir extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_shift_kasir';






    protected $primaryKey = 'seqno';

    public $fillable = [
        'shift_cd',
        'user_id',
        'time_start',
        'time_end',
        'modal',
        'amount_tunai',
        'amount_non_tunai',
        'close_status',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'seqno' => 'integer',
        'shift_cd' => 'string',
        'user_id' => 'string',
        'close_status' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'shift_cd',
        'user_id',
        'time_start',
        'time_end',
        'modal',
        'amount_tunai',
        'amount_non_tunai',
        'close_status',
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
