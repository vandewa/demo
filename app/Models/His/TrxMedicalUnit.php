<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalUnit
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string medical_cd
 * @property string group_no
 * @property string medicalunit_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property string dr_cd
 * @property string dr2_cd
 * @property string file_report
 * @property string medical_note
 * @property string payment_st
 * @property string kelas_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string cito_st
 * @property string alamat_rujuk
 * @property decimal amount
 */
class TrxMedicalUnit extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;

    public $table = 'trx_medical_unit';
    protected $guarded = [''];

    protected $primaryKey = 'medical_unit_seqno';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'group_no' => 'string',
        'medicalunit_cd' => 'string',
        'dr_cd' => 'string',
        'dr2_cd' => 'string',
        'file_report' => 'string',
        'medical_note' => 'string',
        'payment_st' => 'string',
        'kelas_cd' => 'string',
        'modi_id' => 'string',
        'cito_st' => 'string',
        'alamat_rujuk' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'group_no',
        'medicalunit_cd',
        'datetime_trx',
        'dr_cd',
        'dr2_cd',
        'file_report',
        'medical_note',
        'payment_st',
        'kelas_cd',
        'modi_id',
        'modi_datetime',
        'cito_st',
        'alamat_rujuk',
        'amount'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function tindakan()
    {
        return $this->belongsTo(TrxUnitmedisItem::class, 'medicalunit_cd');
    }
    public function dokter()
    {
        return $this->belongsTo(TrxDokter::class, 'dr_cd');
    }

    public function drLab()
    {
        return $this->belongsTo(TrxDokter::class, 'dr_cd2');
    }
    public function medical()
    {
        return $this->belongsTo(TrxMedical::class, 'medical_cd');
    }


}
