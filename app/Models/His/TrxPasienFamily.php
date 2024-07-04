<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxPasienFamily
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string pasien_cd
 * @property string family_tp
 * @property string family_nm
 * @property string address
 * @property string phone
 * @property string mobile1
 * @property string mobile2
 * @property string birth_place
 * @property date birth_date
 * @property integer age
 * @property string blood_tp
 * @property string gender_tp
 * @property string region_prop
 * @property string region_kab
 * @property string region_kec
 * @property string region_kel
 * @property string identity_tp
 * @property string id_no
 * @property string rw
 * @property string rt
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxPasienFamily extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_pasien_family';


protected $guarded = [];



    protected $primaryKey = 'seq_no';

    public $fillable = [
        'pasien_cd',
        'family_tp',
        'family_nm',
        'address',
        'phone',
        'mobile1',
        'mobile2',
        'birth_place',
        'birth_date',
        'age',
        'blood_tp',
        'gender_tp',
        'region_prop',
        'region_kab',
        'region_kec',
        'region_kel',
        'identity_tp',
        'id_no',
        'rw',
        'rt',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pasien_cd' => 'string',
        'family_tp' => 'string',
        'family_nm' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'mobile1' => 'string',
        'mobile2' => 'string',
        'birth_place' => 'string',
        'birth_date' => 'date',
        'age' => 'integer',
        'blood_tp' => 'string',
        'gender_tp' => 'string',
        'region_prop' => 'string',
        'region_kab' => 'string',
        'region_kec' => 'string',
        'region_kel' => 'string',
        'identity_tp' => 'string',
        'id_no' => 'string',
        'rw' => 'string',
        'rt' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pasien_cd',
        'family_tp',
        'family_nm',
        'address',
        'phone',
        'mobile1',
        'mobile2',
        'birth_place',
        'birth_date',
        'age',
        'blood_tp',
        'gender_tp',
        'region_prop',
        'region_kab',
        'region_kec',
        'region_kel',
        'identity_tp',
        'id_no',
        'rw',
        'rt',
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

    public function tipeKeluarga()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','family_tp');
    }
    public function jenisKelamin()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','gender_tp');
    }
    public function tipeIdentitas()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','identity_tp');
    }
    public function golonganDarah()
    {
      return $this->hasOne('App\Models\His\ComCode','com_cd','blood_tp');
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

}
