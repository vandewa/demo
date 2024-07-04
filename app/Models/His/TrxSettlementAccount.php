<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxSettlementAccount
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string account_cd
 * @property decimal amount
 * @property decimal discount_percent
 * @property decimal discount_amount
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxSettlementAccount extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_settlement_account';






    protected $primaryKey = 'settlement_no';

    public $fillable = [
        'account_cd',
        'amount',
        'discount_percent',
        'discount_amount',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'account_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'account_cd',
        'amount',
        'discount_percent',
        'discount_amount',
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
