<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComAccount
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string accgroup_cd
 * @property string account_nm
 * @property decimal default_amount
 * @property integer order_no
 * @property string print_single_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string coa_cd
 */
class ComAccount extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_account';

    protected $primaryKey = 'account_cd';

    public $incrementing = false;

    protected $guarded = [];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'account_cd' => 'string',
        'accgroup_cd' => 'string',
        'account_nm' => 'string',
        'order_no' => 'integer',
        'print_single_st' => 'string',
        'modi_id' => 'string',
        'coa_cd' => 'string'
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
