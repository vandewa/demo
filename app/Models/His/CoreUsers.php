<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreUsers
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string uuid
 * @property integer company_id
 * @property integer group_id
 * @property string username
 * @property string fullname
 * @property string email
 * @property string password
 * @property string remember_token
 */
class CoreUsers extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_users';






    protected $primaryKey = 'id';

    public $fillable = [
        'uuid',
        'company_id',
        'group_id',
        'username',
        'fullname',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'company_id' => 'integer',
        'group_id' => 'integer',
        'username' => 'string',
        'fullname' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    protected static $logAttributes = [
        'uuid',
        'company_id',
        'group_id',
        'username',
        'fullname',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
