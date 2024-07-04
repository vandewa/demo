<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxRs
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string rs_nm
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
 * @property string rstp_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string pt_nm
 * @property string regional_cd
 */
class TrxRs extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_rs';

    protected $primaryKey = 'rs_cd';

   protected $guarded =[''];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rs_cd' => 'string',
        'rs_nm' => 'string',
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
        'rstp_cd' => 'string',
        'modi_id' => 'string',
        'pt_nm' => 'string',
        'regional_cd' => 'string'
    ];

    protected static $logAttributes = [
        'rs_nm',
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
        'rstp_cd',
        'modi_id',
        'modi_datetime',
        'pt_nm',
        'regional_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public function provinsi()
    {
        return $this->belongsTo('App\Models\His\ComRegion','region_prop');
    }
    public function kabupaten()
    {
        return $this->belongsTo('App\Models\His\ComRegion','region_kab');
    }
    public function kecamatan()
    {
        return $this->belongsTo('App\Models\His\ComRegion','region_kec');
    }
    public function kelurahan()
    {
        return $this->belongsTo('App\Models\His\ComRegion','region_kel');
    }


}
