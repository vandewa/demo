<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxIcdgroupItem
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string group_cd
 * @property string icd_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxIcdgroupItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_icdgroup_item';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'group_cd',
        'icd_cd',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'group_cd' => 'string',
        'icd_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'group_cd',
        'icd_cd',
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
