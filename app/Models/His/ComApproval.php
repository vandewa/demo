<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComApproval
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string approval_nm
 * @property string approval_tp
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComApproval extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_approval';






    protected $primaryKey = 'approval_cd';

    public $fillable = [
        'approval_nm',
        'approval_tp',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'approval_cd' => 'string',
        'approval_nm' => 'string',
        'approval_tp' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'approval_nm',
        'approval_tp',
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
