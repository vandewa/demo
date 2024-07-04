<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedical
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string pasien_cd
 * @property string dr_cd
 * @property string|\Carbon\Carbon datetime_in
 * @property string|\Carbon\Carbon datetime_out
 * @property string medical_tp
 * @property string medical_trx_st
 * @property string reff_tp
 * @property string referensi_cd
 * @property string visit_tp
 * @property string out_tp
 * @property string medical_root_cd
 * @property string medical_link_cd
 * @property string initial_data
 * @property string medunit_cd
 * @property string ruang_cd
 * @property string emergency_st
 * @property string proses_st
 * @property string case_tp
 * @property string insurance_no_trx
 * @property integer queue_no
 * @property string info_01
 * @property string info_02
 * @property string rs_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string|\Carbon\Carbon datetime_med_process
 * @property string insurance_tp
 * @property string kunjungan_tp
 * @property string bayar_st
 * @property string ruang_link_cd
 * @property string dr_cd2
 * @property bigInteger jadwal_seqno
 */
class TrxMedical extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical';


    protected $guarded = [];



    protected $primaryKey = 'medical_cd';

    public $incrementing = false;

    public $timestamps = true;



    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'pasien_cd' => 'string',
        'dr_cd' => 'string',
        'medical_tp' => 'string',
        'medical_trx_st' => 'string',
        'reff_tp' => 'string',
        'referensi_cd' => 'string',
        'visit_tp' => 'string',
        'out_tp' => 'string',
        'medical_root_cd' => 'string',
        'medical_link_cd' => 'string',
        'initial_data' => 'string',
        'medunit_cd' => 'string',
        'ruang_cd' => 'string',
        'emergency_st' => 'string',
        'proses_st' => 'string',
        'case_tp' => 'string',
        'insurance_no_trx' => 'string',
        'queue_no' => 'integer',
        'info_01' => 'string',
        'info_02' => 'string',
        'rs_cd' => 'string',
        'modi_id' => 'string',
        'pasien_tp' => 'string',
        'insurance_cd' => 'string',
        'kunjungan_tp' => 'string',
        'bayar_st' => 'string',
        'ruang_link_cd' => 'string',
        'dr_cd2' => 'string'
    ];

    protected static $logAttributes = [
        'pasien_cd',
        'dr_cd',
        'datetime_in',
        'datetime_out',
        'medical_tp',
        'medical_trx_st',
        'reff_tp',
        'referensi_cd',
        'visit_tp',
        'out_tp',
        'medical_root_cd',
        'medical_link_cd',
        'initial_data',
        'medunit_cd',
        'ruang_cd',
        'emergency_st',
        'proses_st',
        'case_tp',
        'insurance_no_trx',
        'queue_no',
        'info_01',
        'info_02',
        'rs_cd',
        'modi_id',
        'modi_datetime',
        'datetime_med_process',
        'pasien_tp' => 'string',
        'insurance_cd' => 'string',
        'kunjungan_tp',
        'bayar_st',
        'ruang_link_cd',
        'dr_cd2',
        'jadwal_seqno'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];



    public function dokter()
    {
      return $this->belongsTo('App\Models\His\TrxDokter','dr_cd');
    }

    public function poli()
    {
      return $this->belongsTo('App\Models\His\TrxUnitMedis','medunit_cd');
    }

    public function pasien()
    {
        return $this->belongsTo(TrxPasien::class, 'pasien_cd');
    }

    public function jenisRawat()
    {
        return $this->belongsTo(ComCode::class, 'medical_tp');
    }

    public function jenisKunjungan()
    {
        return $this->belongsTo(ComCode::class, 'visit_tp');
    }

    public function jenisPasien()
    {
        return $this->belongsTo(ComCode::class, 'pasien_tp');
    }

    public function asuransi()
    {
        return $this->belongsTo(TrxInsurance::class, 'insurance_cd');
    }

    public function subAsuransi()
    {
        return $this->belongsTo(TrxInsuranceMember::class,'trx_insurance_member', 'insurance_tp');
    }

    public function status()
    {
        return $this->belongsTo(ComCode::class, 'medical_trx_st');
    }

    public function jenisPerawatan(){
        return $this->belongsTo(ComCode::class, 'medical_tp');
    }

    // transaksi

    public function medicalRecord(){
        return $this->hasMany(TrxMedicalRecord::class, 'medical_cd');
    }

    public function ruang(){
        return $this->belongsTo(TrxRuang::class, 'ruang_cd');
    }

    public function scopeCarirm($filter, $value) {
        if($value){
           return $filter->whereHas('pasien', function($a) use($value) {
                $a->where('no_rm', 'ilike', "%$value%");
            });
        }
    }
    public function scopeCaripoliklinik($filter, $value) {
        if($value){
           return $filter->where('medunit_cd', $value);
        }
    }
    public function scopeCaritanggal($filter, $value) {
        if($value){
           return $filter->where('datetime_in', 'ilike' ,"%$value%");
        }
    }
    public function scopeCaridokter($filter, $value) {
        if($value){
           return $filter->where('dr_cd', 'ilike' ,"%$value%");
        }
    }


}
