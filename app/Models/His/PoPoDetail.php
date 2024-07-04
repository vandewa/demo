<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoPoDetail
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string item_cd
 * @property string pr_cd
 * @property string unit_cd
 * @property decimal quantity
 * @property decimal unit_price
 * @property decimal trx_amount
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoPoDetail extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_po_detail';






    protected $primaryKey = 'po_cd';

    public $fillable = [
        'po_cd',
        'item_cd',
        'pr_cd',
        'unit_cd',
        'quantity',
        'unit_price',
        'trx_amount',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'po_cd' => 'string',
        'item_cd' => 'string',
        'pr_cd' => 'string',
        'unit_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'item_cd',
        'pr_cd',
        'unit_cd',
        'quantity',
        'unit_price',
        'trx_amount',
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
