<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComMenu
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string menu_nm
 * @property string menu_root
 * @property string menu_url
 * @property string menu_no
 * @property integer menu_level
 * @property string menu_image
 * @property string menu_tp
 * @property string menu_param
 * @property string active_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComMenu extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_menu';






    protected $primaryKey = 'menu_cd';

    public $fillable = [
        'menu_nm',
        'menu_root',
        'menu_url',
        'menu_no',
        'menu_level',
        'menu_image',
        'menu_tp',
        'menu_param',
        'active_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'menu_cd' => 'string',
        'menu_nm' => 'string',
        'menu_root' => 'string',
        'menu_url' => 'string',
        'menu_no' => 'string',
        'menu_level' => 'integer',
        'menu_image' => 'string',
        'menu_tp' => 'string',
        'menu_param' => 'string',
        'active_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'menu_nm',
        'menu_root',
        'menu_url',
        'menu_no',
        'menu_level',
        'menu_image',
        'menu_tp',
        'menu_param',
        'active_st',
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
