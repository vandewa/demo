<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalSettlement
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string data_cd
 * @property string data_nm
 * @property string tarif_tp
 * @property string account_cd
 * @property decimal quantity
 * @property decimal item_price
 * @property decimal amount
 * @property string|\Carbon\Carbon datetime_trx
 * @property string payment_st
 * @property string payitem_st
 * @property string manual_st
 * @property string note
 * @property bigInteger ref_seqno
 * @property string invoice_no
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property decimal diskon_value
 * @property decimal def_amount
 * @property decimal diskon_angka
 */
class TrxMedicalSettlement extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_settlement';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'data_cd',
        'data_nm',
        'tarif_tp',
        'account_cd',
        'quantity',
        'item_price',
        'amount',
        'datetime_trx',
        'payment_st',
        'payitem_st',
        'manual_st',
        'note',
        'ref_seqno',
        'invoice_no',
        'modi_id',
        'modi_datetime',
        'diskon_value',
        'def_amount',
        'diskon_angka'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'data_cd' => 'string',
        'data_nm' => 'string',
        'tarif_tp' => 'string',
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
        'data_cd',
        'data_nm',
        'tarif_tp',
        'account_cd',
        'quantity',
        'item_price',
        'amount',
        'datetime_trx',
        'payment_st',
        'payitem_st',
        'manual_st',
        'note',
        'ref_seqno',
        'invoice_no',
        'modi_id',
        'modi_datetime',
        'diskon_value',
        'def_amount',
        'diskon_angka'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
