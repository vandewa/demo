<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxRuangStatus
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string ruangst_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxRuangStatus extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_ruang_status';






    protected $primaryKey = 'ruangst_cd';

    public $fillable = [
        'ruangst_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ruangst_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'ruangst_nm',
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
