<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxParamedis
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string paramedis_nm
 * @property string paramedis_tp
 * @property string paramedis_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxParamedis extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public $table = 'trx_paramedis';
    protected $guarded = [];
    public $incrementing = false;
    protected $primaryKey = 'paramedis_cd';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'paramedis_cd' => 'string',
        'paramedis_nm' => 'string',
        'paramedis_tp' => 'string',
        'paramedis_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'paramedis_nm',
        'paramedis_tp',
        'paramedis_st',
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

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('paramedis_cd', 'ilike', "%$s%")->orWhere('paramedis_nm', 'ilike', "%$s%");
        }
    }


}