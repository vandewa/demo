<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComApprovalDetail
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string role_cd
 * @property integer approval_order
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComApprovalDetail extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_approval_detail';






    protected $primaryKey = 'approval_cd';

    public $fillable = [
        'role_cd',
        'approval_order',
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
        'role_cd' => 'string',
        'approval_order' => 'integer',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'role_cd',
        'approval_order',
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
