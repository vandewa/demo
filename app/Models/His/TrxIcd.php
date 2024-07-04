<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxIcd
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string icd_root
 * @property string icd_nm
 * @property string icd_tp
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxIcd extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public $table = 'trx_icd';

    protected $guarded = [];
    public $incrementing = false;

    protected $primaryKey = 'icd_cd';
    protected $keyType = 'string';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'icd_cd' => 'string',
        'icd_root' => 'string',
        'icd_nm' => 'string',
        'icd_tp' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'icd_root',
        'icd_nm',
        'icd_tp',
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

    public function standar()
    {
        return $this->belongsTo(ComCode::class, 'icd_tp');
    }

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('icd_cd', 'ilike', "%$s%")->orWhere('icd_nm', 'ilike', "%$s%");
        }
    }


}
