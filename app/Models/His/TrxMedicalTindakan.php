<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalTindakan
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string medical_cd
 * @property string treatment_cd
 * @property string icd_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property string dr_cd
 * @property string dr2_cd
 * @property string file_report
 * @property string medical_note
 * @property decimal quantity
 * @property string treatment_st
 * @property string payment_st
 * @property string medunit_cd
 * @property string kelas_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string diskon_st
 * @property decimal diskon_percent
 * @property decimal amount
 */
class TrxMedicalTindakan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_tindakan';

    public $timestamps = true;
    protected $guarded = [''];





    protected $primaryKey = 'medical_tindakan_seqno';

    public $fillable = [
        'medical_cd',
        'treatment_cd',
        'icd_cd',
        'icd_nm',
        'datetime_trx',
        'dr_cd',
        'dr2_cd',
        'file_report',
        'medical_note',
        'quantity',
        'treatment_st',
        'payment_st',
        'medunit_cd',
        'kelas_cd',
        'modi_id',
        'modi_datetime',
        'diskon_st',
        'diskon_percent',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'treatment_cd' => 'string',
        'icd_cd' => 'string',
        'dr_cd' => 'string',
        'dr2_cd' => 'string',
        'file_report' => 'string',
        'medical_note' => 'string',
        'treatment_st' => 'string',
        'payment_st' => 'string',
        'medunit_cd' => 'string',
        'kelas_cd' => 'string',
        'modi_id' => 'string',
        'diskon_st' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'treatment_cd',
        'icd_cd',
        'datetime_trx',
        'dr_cd',
        'dr2_cd',
        'file_report',
        'medical_note',
        'quantity',
        'treatment_st',
        'payment_st',
        'medunit_cd',
        'kelas_cd',
        'modi_id',
        'modi_datetime',
        'diskon_st',
        'diskon_percent',
        'amount'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public  function  tindakan()
    {
        return $this->belongsTo(TrxTindakan::class, 'treatment_cd');
    }

    public function icd()
    {
        return $this->belongsTo(TrxIcd::class, 'icd_cd');
    }

    public function unitMedis()
    {
        return $this->belongsTo(TrxUnitMedis::class, 'medunit_cd');
    }

    public function dokter()
    {
        return $this->belongsTo(TrxDokter::class, 'dr_cd');
    }

    public function medical()
    {
        return $this->belongsTo(TrxMedical::class, 'medical_cd');
    }


}
