<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoReturDetail
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string ri_cd
 * @property string item_cd
 * @property string unit_cd
 * @property decimal quantity
 * @property decimal unit_price
 * @property decimal trx_amount
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoReturDetail extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_retur_detail';






    protected $primaryKey = 'retur_cd';

    public $fillable = ['retur_cd',
        'ri_cd',
        'item_cd',
        'unit_cd',
        'quantity',
        'unit_price',
        'trx_amount',
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
        'retur_cd' => 'string',
        'ri_cd' => 'string',
        'item_cd' => 'string',
        'unit_cd' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'ri_cd',
        'item_cd',
        'unit_cd',
        'quantity',
        'unit_price',
        'trx_amount',
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
