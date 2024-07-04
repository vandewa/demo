<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ComCode
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string code_nm
 * @property string code_group
 * @property string code_value
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComCode extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    protected $primaryKey = 'com_cd';
    // protected $primaryKey = 'com_cd';
    public $incrementing = false;
    protected $keyType = 'string';

    public $fillable = [
        'com_cd',
        'code_nm',
        'code_group',
        'code_value',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'com_cd' => 'string',
        'code_nm' => 'string',
        'code_group' => 'string',
        'code_value' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'com_cd',
        'code_nm',
        'code_group',
        'code_value',
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
