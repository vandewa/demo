<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComPaymentType
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string top_nm
 * @property integer top_total_day
 * @property integer top_total_month
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComPaymentType extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_payment_type';






    protected $primaryKey = 'top_cd';

    public $fillable = [
        'top_nm',
        'top_total_day',
        'top_total_month',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'top_cd' => 'string',
        'top_nm' => 'string',
        'top_total_day' => 'integer',
        'top_total_month' => 'integer',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'top_nm',
        'top_total_day',
        'top_total_month',
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
