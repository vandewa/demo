<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxSettlementKasir
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property decimal amount
 * @property string trx_tp
 * @property string note
 * @property integer modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxSettlementKasir extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_settlement_kasir';






    protected $primaryKey = 'seqno';

    public $fillable = [
        'amount',
        'trx_tp',
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
        'trx_tp' => 'string',
        'note' => 'string',
        'modi_id' => 'integer'
    ];

    protected static $logAttributes = [
        'amount',
        'trx_tp',
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
