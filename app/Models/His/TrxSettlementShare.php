<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxSettlementShare
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string medical_cd
 * @property decimal amount_total
 * @property decimal amount_asuransi
 * @property decimal amount_pasien
 * @property string tarif_tp
 * @property bigInteger ref_seqno
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxSettlementShare extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_settlement_share';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'amount_total',
        'amount_asuransi',
        'amount_pasien',
        'tarif_tp',
        'ref_seqno',
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
        'tarif_tp' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'amount_total',
        'amount_asuransi',
        'amount_pasien',
        'tarif_tp',
        'ref_seqno',
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
