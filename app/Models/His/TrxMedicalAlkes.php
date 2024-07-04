<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalAlkes
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string pos_cd
 * @property string item_cd
 * @property decimal quantity
 * @property string dr_cd
 * @property string paramedis_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property string note
 * @property string payment_st
 * @property string kelas_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property decimal amount
 * @property string trans_id
 */
class TrxMedicalAlkes extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_alkes';






    protected $primaryKey = 'medical_alkes_seqno';

    public $fillable = [
        'medical_cd',
        'pos_cd',
        'item_cd',
        'quantity',
        'dr_cd',
        'paramedis_cd',
        'datetime_trx',
        'note',
        'payment_st',
        'kelas_cd',
        'modi_id',
        'modi_datetime',
        'amount',
        'trans_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'pos_cd' => 'string',
        'item_cd' => 'string',
        'dr_cd' => 'string',
        'paramedis_cd' => 'string',
        'note' => 'string',
        'payment_st' => 'string',
        'kelas_cd' => 'string',
        'modi_id' => 'string',
        'trans_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'pos_cd',
        'item_cd',
        'quantity',
        'dr_cd',
        'paramedis_cd',
        'datetime_trx',
        'note',
        'payment_st',
        'kelas_cd',
        'modi_id',
        'modi_datetime',
        'amount',
        'trans_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
