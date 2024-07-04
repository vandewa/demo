<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxRsDokter
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string dr_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxRsDokter extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_rs_dokter';






    protected $primaryKey = 'rs_cd';

    public $fillable = [
        'dr_cd',
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
        'dr_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'dr_cd',
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
