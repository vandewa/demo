<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxIcdGroup
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string group_nm
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxIcdGroup extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_icd_group';






    protected $primaryKey = 'group_cd';

    public $fillable = [
        'group_nm',
        'note',
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
        'group_nm' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'group_nm',
        'note',
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
