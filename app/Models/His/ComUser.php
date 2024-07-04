<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComUser
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string user_nm
 * @property string password
 * @property string login_st
 * @property string lock_st
 * @property string|\Carbon\Carbon last_login
 * @property string change_password
 * @property string|\Carbon\Carbon password_date
 * @property string rule_tp
 * @property string default_medunit
 * @property string default_bangsal
 * @property string rs_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComUser extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_user';






    protected $primaryKey = 'user_id';

    public $fillable = [
        'user_nm',
        'password',
        'login_st',
        'lock_st',
        'last_login',
        'change_password',
        'password_date',
        'rule_tp',
        'default_medunit',
        'default_bangsal',
        'rs_cd',
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
        'user_nm' => 'string',
        'password' => 'string',
        'login_st' => 'string',
        'lock_st' => 'string',
        'change_password' => 'string',
        'rule_tp' => 'string',
        'default_medunit' => 'string',
        'default_bangsal' => 'string',
        'rs_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'user_nm',
        'password',
        'login_st',
        'lock_st',
        'last_login',
        'change_password',
        'password_date',
        'rule_tp',
        'default_medunit',
        'default_bangsal',
        'rs_cd',
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
