<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComRoleMenu
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string menu_cd
 * @property string rule_tp
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComRoleMenu extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_role_menu';






    protected $primaryKey = 'role_cd';

    public $fillable = [
        'menu_cd',
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
        'menu_cd' => 'string',
        'rule_tp' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'menu_cd',
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
