<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCobItem
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property bigInteger cob_seqno
 * @property string medical_cd
 * @property bigInteger medical_settlement_seqno
 * @property string data_nm
 * @property decimal quantity
 * @property decimal amount
 * @property string item_tp
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string insurance_cd
 */
class TrxCobItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_cob_item';






    protected $primaryKey = 'cob_item_seqno';

    public $fillable = [
        'cob_seqno',
        'medical_cd',
        'medical_settlement_seqno',
        'data_nm',
        'quantity',
        'amount',
        'item_tp',
        'modi_id',
        'modi_datetime',
        'insurance_cd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'data_nm' => 'string',
        'item_tp' => 'string',
        'modi_id' => 'string',
        'insurance_cd' => 'string'
    ];

    protected static $logAttributes = [
        'cob_seqno',
        'medical_cd',
        'medical_settlement_seqno',
        'data_nm',
        'quantity',
        'amount',
        'item_tp',
        'modi_id',
        'modi_datetime',
        'insurance_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
