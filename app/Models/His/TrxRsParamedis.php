<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxRsParamedis
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string paramedis_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxRsParamedis extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_rs_paramedis';






    protected $primaryKey = 'rs_cd';

    public $fillable = [
        'paramedis_cd',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rs_cd' => 'string',
        'paramedis_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'paramedis_cd',
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
