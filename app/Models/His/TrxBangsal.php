<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxBangsal
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string bangsal_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property integer bangsal_urut
 * @property string bangsal_group
 */
class TrxBangsal extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'trx_bangsal';
    public $incrementing = false;
    protected $primaryKey = 'bangsal_cd';
    protected $guarded = [];
    public $keyType = 'string';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bangsal_cd' => 'string',
        'bangsal_nm' => 'string',
        'modi_id' => 'string',
        'bangsal_urut' => 'integer',
        'bangsal_group' => 'string'
    ];

    protected static $logAttributes = [
        'bangsal_nm',
        'modi_id',
        'modi_datetime',
        'bangsal_urut',
        'bangsal_group'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function ruangs()
    {
        return $this->hasMany(TrxRuang::class, 'bangsal_cd');
    }

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('bangsal_cd', 'ilike', "%$s%")->orWhere('bangsal_nm', 'ilike', "%$s%");
        }
    }

}