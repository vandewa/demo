<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxInsuranceMember
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string insurance_cd
 * @property string insurance_member_nm
 * @property string active_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxInsuranceMember extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_insurance_member';


    protected $guarded = [];

    public $incrementing = false;


    protected $primaryKey = 'insurance_member_cd';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'insurance_member_cd' => 'string',
        'insurance_cd' => 'string',
        'insurance_member_nm' => 'string',
        'active_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'insurance_cd',
        'insurance_member_nm',
        'active_st',
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
