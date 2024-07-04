<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxSettlementHs
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string medical_cd
 * @property bigInteger ref_medical_resep_seqno
 * @property string pasien_cd
 * @property string invoice_no
 * @property string|\Carbon\Carbon invoice_date
 * @property string payment_tp
 * @property string insurance_cd
 * @property string payment_cd
 * @property string card_no
 * @property string entry_nm
 * @property string|\Carbon\Carbon entry_date
 * @property string pay_nm
 * @property string payment_st
 * @property string note
 * @property decimal amount_asuransi
 * @property decimal amount_pasien
 * @property decimal amount_tunai
 * @property decimal amount_nontunai
 * @property decimal discount_percent
 * @property decimal discount_amount
 * @property string info_01
 * @property string info_02
 * @property decimal info_11
 * @property decimal info_12
 * @property decimal ext_amount
 * @property string|\Carbon\Carbon ext_date
 * @property string ext_user
 * @property string ext_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property decimal amount_asuransi2
 * @property decimal amount_asuransi3
 * @property string asuransi_cd
 * @property string asuransi_cd2
 * @property string asuransi_cd3
 * @property decimal biaya_administrasi
 * @property integer count_copy
 * @property string payment_cd2
 * @property string payment_cd3
 * @property string card_no2
 * @property string card_no3
 * @property decimal amount_nontunai2
 * @property decimal amount_nontunai3
 * @property string jenis_bayar
 */
class TrxSettlementHs extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_settlement_hs';






    protected $primaryKey = 'settlement_no';

    public $fillable = [
        'medical_cd',
        'ref_medical_resep_seqno',
        'pasien_cd',
        'invoice_no',
        'invoice_date',
        'payment_tp',
        'insurance_cd',
        'payment_cd',
        'card_no',
        'entry_nm',
        'entry_date',
        'pay_nm',
        'payment_st',
        'note',
        'amount_asuransi',
        'amount_pasien',
        'amount_tunai',
        'amount_nontunai',
        'discount_percent',
        'discount_amount',
        'info_01',
        'info_02',
        'info_11',
        'info_12',
        'ext_amount',
        'ext_date',
        'ext_user',
        'ext_st',
        'modi_id',
        'modi_datetime',
        'amount_asuransi2',
        'amount_asuransi3',
        'asuransi_cd',
        'asuransi_cd2',
        'asuransi_cd3',
        'biaya_administrasi',
        'count_copy',
        'payment_cd2',
        'payment_cd3',
        'card_no2',
        'card_no3',
        'amount_nontunai2',
        'amount_nontunai3',
        'jenis_bayar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'pasien_cd' => 'string',
        'invoice_no' => 'string',
        'payment_tp' => 'string',
        'insurance_cd' => 'string',
        'payment_cd' => 'string',
        'card_no' => 'string',
        'entry_nm' => 'string',
        'pay_nm' => 'string',
        'payment_st' => 'string',
        'note' => 'string',
        'info_01' => 'string',
        'info_02' => 'string',
        'ext_user' => 'string',
        'ext_st' => 'string',
        'modi_id' => 'string',
        'asuransi_cd' => 'string',
        'asuransi_cd2' => 'string',
        'asuransi_cd3' => 'string',
        'count_copy' => 'integer',
        'payment_cd2' => 'string',
        'payment_cd3' => 'string',
        'card_no2' => 'string',
        'card_no3' => 'string',
        'jenis_bayar' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'ref_medical_resep_seqno',
        'pasien_cd',
        'invoice_no',
        'invoice_date',
        'payment_tp',
        'insurance_cd',
        'payment_cd',
        'card_no',
        'entry_nm',
        'entry_date',
        'pay_nm',
        'payment_st',
        'note',
        'amount_asuransi',
        'amount_pasien',
        'amount_tunai',
        'amount_nontunai',
        'discount_percent',
        'discount_amount',
        'info_01',
        'info_02',
        'info_11',
        'info_12',
        'ext_amount',
        'ext_date',
        'ext_user',
        'ext_st',
        'modi_id',
        'modi_datetime',
        'amount_asuransi2',
        'amount_asuransi3',
        'asuransi_cd',
        'asuransi_cd2',
        'asuransi_cd3',
        'biaya_administrasi',
        'count_copy',
        'payment_cd2',
        'payment_cd3',
        'card_no2',
        'card_no3',
        'amount_nontunai2',
        'amount_nontunai3',
        'jenis_bayar'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
