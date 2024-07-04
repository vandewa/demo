<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxPasien
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string no_rm
 * @property string|\Carbon\Carbon register_date
 * @property string pasien_tp
 * @property string pasien_nm
 * @property string middle_nm
 * @property string last_nm
 * @property string title
 * @property string address
 * @property string region_prop
 * @property string region_kab
 * @property string region_kec
 * @property string region_kel
 * @property string rw
 * @property string rt
 * @property string postcode
 * @property string phone
 * @property string mobile1
 * @property string mobile2
 * @property string fax
 * @property string email
 * @property string birth_place
 * @property date birth_date
 * @property integer age
 * @property string blood_tp
 * @property decimal weight
 * @property decimal height
 * @property string gender_tp
 * @property string marital_tp
 * @property string nation_cd
 * @property string religion_cd
 * @property string occupation_cd
 * @property string education_cd
 * @property string race_cd
 * @property string register_st
 * @property string file_picture
 * @property string address_id
 * @property string region_prop_id
 * @property string region_kab_id
 * @property string region_kec_id
 * @property string region_kel_id
 * @property string rw_id
 * @property string rt_id
 * @property string language_st
 * @property string rs_cd
 * @property string datamedis_01
 * @property string datamedis_02
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string translate_st
 * @property time datetime_pas_process
 * @property string old_no_rm
 */
class TrxPasien extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_pasien';
    public $incrementing = false;
    protected $primaryKey = 'pasien_cd';
    public $keyType = 'string';

    // public $incrementing = false;
    protected $appends = ["usia"];


    public $fillable = [
           'pasien_cd',
           'rs_cd',
           'no_rm',
           'register_date',
           'pasien_tp',
           'pasien_nm',
           'middle_nm',
           'last_nm',
           'title',
           'address',
           'region_prop',
           'region_kab',
           'region_kec',
           'region_kel',
           'rw',
           'rt',
           'postcode',
           'phone',
           'mobile1',
           'mobile2',
           'fax',
           'email',
           'birth_place',
           'birth_date',
           'age',
           'blood_tp',
           'weight',
           'height',
           'gender_tp',
           'marital_tp',
           'nation_cd',
           'religion_cd',
           'occupation_cd',
           'education_cd',
           'race_cd',
           'register_st',
           'mom_name',
           'dad_name',
           'pj_name',
           'pj_tp',
           'pj_address',
           'pj_date_birth',
           'pj_telp',
           'datamedis_01',
           'datamedis_02',
           'datetime_pas_process',
           'old_no_rm',
           'modi_id',
           'identity_tp',
           'identity_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pasien_cd' => 'string',
    ];

    protected static $logAttributes = [
        'pasien_cd',
           'rs_cd',
           'no_rm',
           'register_date',
           'pasien_tp',
           'pasien_nm',
           'middle_nm',
           'last_nm',
           'title',
           'address',
           'region_prop',
           'region_kab',
           'region_kec',
           'region_kel',
           'rw',
           'rt',
           'postcode',
           'phone',
           'mobile1',
           'mobile2',
           'fax',
           'email',
           'birth_place',
           'birth_date',
           'age',
           'blood_tp',
           'weight',
           'height',
           'gender_tp',
           'marital_tp',
           'nation_cd',
           'religion_cd',
           'occupation_cd',
           'education_cd',
           'race_cd',
           'register_st',
           'mom_name',
           'dad_name',
           'pj_name',
           'pj_tp',
           'pj_address',
           'pj_date_birth',
           'pj_telp',
           'datamedis_01',
           'datamedis_02',
           'datetime_pas_process',
           'old_no_rm',
           'modi_id',
           'identity_tp',
           'identity_no'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function family()
    {
      return $this->hasOne(TrxPasienFamily::class,'pasien_cd');
    }
    public function asuransi()
    {
      return $this->hasOne('App\Models\His\TrxPasienInsurance','pasien_cd','pasien_cd');
    }
    public function provinsi()
    {
      return $this->hasOne('App\Models\His\ComRegion','region_cd','region_prop');
    }
    public function kabupaten()
    {
      return $this->hasOne('App\Models\His\ComRegion','region_cd','region_kab');
    }
    public function kecamatan()
    {
      return $this->hasOne('App\Models\His\ComRegion','region_cd','region_kec');
    }
    public function kelurahan()
    {
      return $this->hasOne('App\Models\His\ComRegion','region_cd','region_kel');
    }
    public function jenisKelamin()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','gender_tp');
    }
    public function pernikahan()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','marital_tp');
    }
    public function negara()
    {
      return $this->hasOne('App\Models\His\ComNation','nation_cd','nation_cd');
    }
    public function agama()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','religion_cd');
    }
    public function pekerjaan()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','occupation_cd');
    }
    public function pendidikan()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','education_cd');
    }
    public function suku()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','race_cd');
    }
    public function tipePasien()
    {
      return $this->belongsTo(ComCode::class,'pasien_tp');
    }

    public function scopeCarirm($filter, $value) {
        if($value){
            return $this->where('no_rm', 'ilike', "%$value%");
        }

    }
    public function scopeCarikusus($filter, $value) {
        if($value){
            return $this->where('no_rm', 'ilike', "%$value%")->orWhere('pasien_nm', 'ilike', "%$value%");
        }

    }
    public function scopeCaripasien($filter, $value) {
        if($value){
            return $this->where('pasien_nm', 'ilike', "%$value%");
        }

    }

    public function scopeCarialamat($filter, $value) {
        if($value){
            return $this->whereHas('provinsi', function($a) use($value){
                $a->where('region_nm', 'ilike', "%$value%");
            })->orwhereHas('kabupaten', function($a) use($value) {
                $a->where('region_nm', 'ilike', "%$value%");
            })->orwhereHas('kecamatan', function($a) use($value) {
                $a->where('region_nm', 'ilike', "%$value%");
            })->orwhereHas('kelurahan', function($a) use($value) {
                $a->where('region_nm', 'ilike', "%$value%");
            })->orwhere('address', 'ilike', "$value");
        }
    }

    public function scopeCaritanggal($filter, $value){
        if($value){
            return $this->where('birth_date', $value);
        }
    }



    public function getUsiAttribute() {
         return hitung_umur($this->attributes['birth_date']);
    }

}
