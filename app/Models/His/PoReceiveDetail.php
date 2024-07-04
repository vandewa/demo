<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoReceiveDetail
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string item_cd
 * @property string po_cd
 * @property string principal_cd
 * @property string unit_cd
 * @property decimal quantity
 * @property decimal unit_price
 * @property decimal discount_percent
 * @property decimal discount_amount
 * @property decimal trx_amount
 * @property string currency_cd
 * @property decimal rate
 * @property string faktur_no
 * @property date faktur_date
 * @property string batch_no
 * @property date expire_date
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoReceiveDetail extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_receive_detail';






    protected $primaryKey = 'ri_cd';

    public $fillable = [
        'item_cd',
        'po_cd',
        'principal_cd',
        'unit_cd',
        'quantity',
        'unit_price',
        'discount_percent',
        'discount_amount',
        'trx_amount',
        'currency_cd',
        'rate',
        'faktur_no',
        'faktur_date',
        'batch_no',
        'expire_date',
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
        'ri_cd' => 'string',
        'item_cd' => 'string',
        'po_cd' => 'string',
        'principal_cd' => 'string',
        'unit_cd' => 'string',
        'currency_cd' => 'string',
        'faktur_no' => 'string',
        'faktur_date' => 'date',
        'batch_no' => 'string',
        'expire_date' => 'date',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'item_cd',
        'po_cd',
        'principal_cd',
        'unit_cd',
        'quantity',
        'unit_price',
        'discount_percent',
        'discount_amount',
        'trx_amount',
        'currency_cd',
        'rate',
        'faktur_no',
        'faktur_date',
        'batch_no',
        'expire_date',
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
