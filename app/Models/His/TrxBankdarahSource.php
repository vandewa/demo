<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxBankdarahSource
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string bankdarah_source_nm
 * @property string bankdarah_source_tp
 * @property string|\Carbon\Carbon register_date
 * @property date birth_date
 * @property string birth_place
 * @property string address
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string region_prop
 * @property string region_kab
 * @property string region_kec
 * @property string region_kel
 * @property string phone
 * @property string mobile1
 * @property string mobile2
 * @property string blood_tp
 * @property string identity_no
 */
class TrxBankdarahSource extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_bankdarah_source';






    protected $primaryKey = 'source_cd';

    public $fillable = [
        'bankdarah_source_nm',
        'bankdarah_source_tp',
        'register_date',
        'birth_date',
        'birth_place',
        'address',
        'modi_id',
        'modi_datetime',
        'region_prop',
        'region_kab',
        'region_kec',
        'region_kel',
        'phone',
        'mobile1',
        'mobile2',
        'blood_tp',
        'identity_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bankdarah_source_nm' => 'string',
        'bankdarah_source_tp' => 'string',
        'birth_date' => 'date',
        'birth_place' => 'string',
        'address' => 'string',
        'modi_id' => 'string',
        'region_prop' => 'string',
        'region_kab' => 'string',
        'region_kec' => 'string',
        'region_kel' => 'string',
        'phone' => 'string',
        'mobile1' => 'string',
        'mobile2' => 'string',
        'blood_tp' => 'string',
        'identity_no' => 'string'
    ];

    protected static $logAttributes = [
        'bankdarah_source_nm',
        'bankdarah_source_tp',
        'register_date',
        'birth_date',
        'birth_place',
        'address',
        'modi_id',
        'modi_datetime',
        'region_prop',
        'region_kab',
        'region_kec',
        'region_kel',
        'phone',
        'mobile1',
        'mobile2',
        'blood_tp',
        'identity_no'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
