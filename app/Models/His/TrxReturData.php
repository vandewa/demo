<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxReturData
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property bigInteger retur_seqno
 * @property string item_cd
 * @property decimal quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxReturData extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_retur_data';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'retur_seqno',
        'item_cd',
        'quantity',
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
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'retur_seqno',
        'item_cd',
        'quantity',
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
