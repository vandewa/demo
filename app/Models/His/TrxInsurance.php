<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxInsurance
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string insurance_nm
 * @property string data_no
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxInsurance extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_insurance';

    protected $primaryKey = 'insurance_cd';
    public $incrementing = false;

    protected $guarded = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'insurance_cd' => 'string',
        'insurance_nm' => 'string',
        'data_no' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'insurance_nm',
        'data_no',
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

    public function pasienInsurance()
    {
        return $this->hasMany(TrxPasienInsurance::class, 'insurance_cd');
    }


}
