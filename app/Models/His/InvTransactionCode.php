<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvTransactionCode
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string inv_trx_nm
 * @property string move_tp
 * @property string inv_trx_tp
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvTransactionCode extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_transaction_code';






    protected $primaryKey = 'inv_trx_cd';

    public $fillable = [
        'inv_trx_nm',
        'move_tp',
        'inv_trx_tp',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'inv_trx_cd' => 'string',
        'inv_trx_nm' => 'string',
        'move_tp' => 'string',
        'inv_trx_tp' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'inv_trx_nm',
        'move_tp',
        'inv_trx_tp',
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
