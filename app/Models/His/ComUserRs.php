<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComUserRs
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string rs_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComUserRs extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_user_rs';






    protected $primaryKey = 'user_id';

    public $fillable = [
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
        'rs_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
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
