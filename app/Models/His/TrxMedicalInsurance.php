<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalInsurance
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string insurance_no_trx
 * @property string|\Carbon\Carbon datetime_trx
 * @property string|\Carbon\Carbon reff_datetime
 * @property string reff_insurance_notrx
 * @property string referensi_cd
 * @property string referensi_nm
 * @property string reff_icd_cd
 * @property string reff_icd_nm
 * @property string member_tp
 * @property string note
 * @property string info_01
 * @property string info_02
 * @property integer print_no
 * @property string trx_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalInsurance extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_insurance';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'insurance_no_trx',
        'datetime_trx',
        'reff_datetime',
        'reff_insurance_notrx',
        'referensi_cd',
        'referensi_nm',
        'reff_icd_cd',
        'reff_icd_nm',
        'member_tp',
        'note',
        'info_01',
        'info_02',
        'print_no',
        'trx_st',
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
        'insurance_no_trx' => 'string',
        'reff_insurance_notrx' => 'string',
        'referensi_cd' => 'string',
        'referensi_nm' => 'string',
        'reff_icd_cd' => 'string',
        'reff_icd_nm' => 'string',
        'member_tp' => 'string',
        'note' => 'string',
        'info_01' => 'string',
        'info_02' => 'string',
        'print_no' => 'integer',
        'trx_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'insurance_no_trx',
        'datetime_trx',
        'reff_datetime',
        'reff_insurance_notrx',
        'referensi_cd',
        'referensi_nm',
        'reff_icd_cd',
        'reff_icd_nm',
        'member_tp',
        'note',
        'info_01',
        'info_02',
        'print_no',
        'trx_st',
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
