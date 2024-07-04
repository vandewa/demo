<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxTindakan
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property string treatment_root
 * @property string treatment_nm
 * @property string treatment_tp
 * @property string standar_tp
 * @property string file_format
 * @property string note
 * @property string default_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxTindakan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public $table = 'trx_tindakan';

    protected $primaryKey = 'treatment_cd';

    protected $guarded = [];

    public $incrementing = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'treatment_cd' => 'string',
        'treatment_root' => 'string',
        'treatment_nm' => 'string',
        'treatment_tp' => 'string',
        'standar_tp' => 'string',
        'file_format' => 'string',
        'note' => 'string',
        'default_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'treatment_root',
        'treatment_nm',
        'treatment_tp',
        'standar_tp',
        'file_format',
        'note',
        'default_cd',
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
            return $query->where('treatment_cd', 'ilike', "%$s%")->orWhere('treatment_nm', 'ilike', "%$s%");
        }
    }


}