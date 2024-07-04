<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComRoleUser
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string user_id
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComRoleUser extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_role_user';






    protected $primaryKey = 'role_cd';

    public $fillable = [
        'user_id',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'role_cd' => 'string',
        'user_id' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'user_id',
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
