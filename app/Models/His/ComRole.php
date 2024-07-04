<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComRole
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string role_nm
 * @property string rule_tp
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComRole extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_role';






    protected $primaryKey = 'role_cd';

    public $fillable = [
        'role_nm',
        'rule_tp',
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
        'role_nm' => 'string',
        'rule_tp' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'role_nm',
        'rule_tp',
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
