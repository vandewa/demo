<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComPaymentMethod
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string payment_nm
 * @property string bank_cd
 * @property decimal persen_charge
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComPaymentMethod extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_payment_method';






    protected $primaryKey = 'payment_cd';

    public $fillable = [
        'payment_nm',
        'bank_cd',
        'persen_charge',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'payment_cd' => 'string',
        'payment_nm' => 'string',
        'bank_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'payment_nm',
        'bank_cd',
        'persen_charge',
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
