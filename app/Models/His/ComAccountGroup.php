<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComAccountGroup
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string accgroup_nm
 * @property integer order_no
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComAccountGroup extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_account_group';

    protected $primaryKey = 'accgroup_cd';

    public $incrementing = false;

    protected $guarded = [];



    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'accgroup_cd' => 'string',
        'accgroup_nm' => 'string',
        'order_no' => 'integer',
        'modi_id' => 'string'
    ];



    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
