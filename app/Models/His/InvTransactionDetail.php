<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvTransactionDetail
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string trx_cd
 * @property string item_cd
 * @property string unit_cd
 * @property decimal trx_quantity
 * @property string currency_cd
 * @property decimal trx_amount
 * @property decimal rate
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvTransactionDetail extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_transaction_detail';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'trx_cd',
        'item_cd',
        'unit_cd',
        'trx_quantity',
        'currency_cd',
        'trx_amount',
        'rate',
        'note',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'trx_cd' => 'string',
        'item_cd' => 'string',
        'unit_cd' => 'string',
        'currency_cd' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'trx_cd',
        'item_cd',
        'unit_cd',
        'trx_quantity',
        'currency_cd',
        'trx_amount',
        'rate',
        'note',
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
