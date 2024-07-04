<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvBatchItem
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string item_cd
 * @property decimal trx_qty
 * @property string batch_no_start
 * @property string batch_no_end
 * @property time expire_date
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvBatchItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_batch_item';



public $timestamps = true;




    protected $primaryKey = 'batch_no';

    public $fillable = [
        'item_cd',
        'trx_qty',
        'batch_no_start',
        'batch_no_end',
        'expire_date',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_cd' => 'string',
        'batch_no_start' => 'string',
        'batch_no_end' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'item_cd',
        'trx_qty',
        'batch_no_start',
        'batch_no_end',
        'expire_date',
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
