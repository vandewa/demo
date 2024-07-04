<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxDeposit
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string deposit_cd
 * @property string medical_cd
 * @property string pasien_cd
 * @property string invoice_no
 * @property string|\Carbon\Carbon invoice_date
 * @property string payment_tp
 * @property string payment_cd
 * @property string card_no
 * @property decimal total
 * @property string entry_nm
 * @property string|\Carbon\Carbon entry_date
 * @property string|\Carbon\Carbon pay_date
 * @property string pay_nm
 * @property decimal amount_tunai
 * @property decimal amount_nontunai
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string kembali_st
 */
class TrxDeposit extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_deposit';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'deposit_cd',
        'medical_cd',
        'pasien_cd',
        'invoice_no',
        'invoice_date',
        'payment_tp',
        'payment_cd',
        'card_no',
        'total',
        'entry_nm',
        'entry_date',
        'pay_date',
        'pay_nm',
        'amount_tunai',
        'amount_nontunai',
        'note',
        'modi_id',
        'modi_datetime',
        'kembali_st'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'deposit_cd' => 'string',
        'medical_cd' => 'string',
        'pasien_cd' => 'string',
        'invoice_no' => 'string',
        'payment_tp' => 'string',
        'payment_cd' => 'string',
        'card_no' => 'string',
        'entry_nm' => 'string',
        'pay_nm' => 'string',
        'note' => 'string',
        'modi_id' => 'string',
        'kembali_st' => 'string'
    ];

    protected static $logAttributes = [
        'deposit_cd',
        'medical_cd',
        'pasien_cd',
        'invoice_no',
        'invoice_date',
        'payment_tp',
        'payment_cd',
        'card_no',
        'total',
        'entry_nm',
        'entry_date',
        'pay_date',
        'pay_nm',
        'amount_tunai',
        'amount_nontunai',
        'note',
        'modi_id',
        'modi_datetime',
        'kembali_st'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
