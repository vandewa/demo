<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComCurrency
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string currency_nm
 * @property string currency_symbol
 * @property decimal currency_rate
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComCurrency extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_currency';






    protected $primaryKey = 'currency_cd';

    public $fillable = [
        'currency_nm',
        'currency_symbol',
        'currency_rate',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'currency_cd' => 'string',
        'currency_nm' => 'string',
        'currency_symbol' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'currency_nm',
        'currency_symbol',
        'currency_rate',
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
