<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalSettlementInv
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string item_cd
 * @property string racik_cd
 * @property decimal quantity
 * @property decimal item_price
 * @property decimal item_price_master
 * @property decimal total_price
 * @property string account_cd
 * @property bigInteger ref_medical_resep_seqno
 * @property bigInteger ref_medical_alkes_seqno
 * @property bigInteger ref_resep_seqno
 * @property string|\Carbon\Carbon datetime_trx
 * @property string payment_st
 * @property string payitem_st
 * @property string manual_st
 * @property string note
 * @property string invoice_no
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalSettlementInv extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_settlement_inv';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'item_cd',
        'racik_cd',
        'quantity',
        'item_price',
        'item_price_master',
        'total_price',
        'account_cd',
        'ref_medical_resep_seqno',
        'ref_medical_alkes_seqno',
        'ref_resep_seqno',
        'datetime_trx',
        'payment_st',
        'payitem_st',
        'manual_st',
        'note',
        'invoice_no',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'item_cd' => 'string',
        'racik_cd' => 'string',
        'account_cd' => 'string',
        'payment_st' => 'string',
        'payitem_st' => 'string',
        'manual_st' => 'string',
        'note' => 'string',
        'invoice_no' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'item_cd',
        'racik_cd',
        'quantity',
        'item_price',
        'item_price_master',
        'total_price',
        'account_cd',
        'ref_medical_resep_seqno',
        'ref_medical_alkes_seqno',
        'ref_resep_seqno',
        'datetime_trx',
        'payment_st',
        'payitem_st',
        'manual_st',
        'note',
        'invoice_no',
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
