<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxSeverity
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string severity_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxSeverity extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_severity';






    protected $primaryKey = 'severity_cd';

    public $fillable = [
        'severity_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'severity_cd' => 'string',
        'severity_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'severity_nm',
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
