<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComShift
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string shift_nm
 * @property time time_start
 * @property time time_end
 * @property decimal saldo_start
 * @property string login_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComShift extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_shift';






    protected $primaryKey = 'shift_cd';

    public $fillable = [
        'shift_nm',
        'time_start',
        'time_end',
        'saldo_start',
        'login_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shift_cd' => 'string',
        'shift_nm' => 'string',
        'login_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'shift_nm',
        'time_start',
        'time_end',
        'saldo_start',
        'login_st',
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
