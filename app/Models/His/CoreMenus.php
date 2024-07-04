<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreMenus
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property integer module_id
 * @property string name
 * @property string url
 * @property boolean status
 */
class CoreMenus extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_menus';






    protected $primaryKey = 'id';

    public $fillable = [
        'module_id',
        'name',
        'url',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'module_id' => 'integer',
        'name' => 'string',
        'url' => 'string',
        'status' => 'boolean'
    ];

    protected static $logAttributes = [
        'module_id',
        'name',
        'url',
        'status'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
