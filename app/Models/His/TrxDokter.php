<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxDokter
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string dr_nm
 * @property string spesialis_cd
 * @property string paramedis_st
 * @property string nip
 * @property string dr_tp
 * @property string address
 * @property string region_prop
 * @property string region_kab
 * @property string region_kec
 * @property string region_kel
 * @property string postcode
 * @property string phone
 * @property string mobile
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
 * @property string file_picture
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string sep
 * @property string str
 */
class TrxDokter extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public $table = 'trx_dokter';
    protected $guarded = [];


    public $incrementing = false;
    protected $primaryKey = 'dr_cd';
    public $keyType = 'string';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dr_cd' => 'string',
        'dr_nm' => 'string',
        'spesialis_cd' => 'string',
        'paramedis_st' => 'string',
        'nip' => 'string',
        'dr_tp' => 'string',
        'address' => 'string',
        'region_prop' => 'string',
        'region_kab' => 'string',
        'region_kec' => 'string',
        'region_kel' => 'string',
        'postcode' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'birth_place' => 'string',
        'birth_date' => 'date',
        'age' => 'integer',
        'blood_tp' => 'string',
        'gender_tp' => 'string',
        'marital_tp' => 'string',
        'nation_cd' => 'string',
        'religion_cd' => 'string',
        'occupation_cd' => 'string',
        'education_cd' => 'string',
        'race_cd' => 'string',
        'file_picture' => 'string',
        'modi_id' => 'string',
        'sep' => 'string',
        'str' => 'string'
    ];

    protected static $logAttributes = [
        'dr_nm',
        'spesialis_cd',
        'paramedis_st',
        'nip',
        'dr_tp',
        'address',
        'region_prop',
        'region_kab',
        'region_kec',
        'region_kel',
        'postcode',
        'phone',
        'mobile',
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
        'file_picture',
        'modi_id',
        'modi_datetime',
        'sep',
        'str'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function spesialis()
    {
        return $this->belongsTo(TrxSpesialis::class, 'spesialis_cd');
    }
    public function tipe()
    {
        return $this->belongsTo(ComCode::class, 'paramedis_tp');
    }

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('dr_cd', 'ilike', "%$s%")->orWhere('dr_nm', 'ilike', "%$s%")->orWhere('nip', 'ilike', "%$s%");
        }
    }


}
