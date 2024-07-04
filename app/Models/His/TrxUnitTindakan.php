<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxUnitTindakan
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property string treatment_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxUnitTindakan extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_unit_tindakan';






    protected $primaryKey = 'medunit_cd';

    public $fillable = [
        'treatment_cd',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medunit_cd' => 'string',
        'treatment_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'treatment_cd',
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
