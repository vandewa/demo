<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComLoginHistory
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string user_id
 * @property string|\Carbon\Carbon datetime_login
 * @property string|\Carbon\Carbon datetime_logout
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComLoginHistory extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_login_history';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'user_id',
        'datetime_login',
        'datetime_logout',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'user_id',
        'datetime_login',
        'datetime_logout',
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
