<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxSpesialis
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string spesialis_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxSpesialis extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_spesialis';
    protected $guarded = [];
    public $incrementing = false;
    protected $primaryKey = 'spesialis_cd';
    public $keyType = 'string';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'spesialis_cd' => 'string',
        'spesialis_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'spesialis_nm',
        'modi_id',
        'modi_datetime'
    ];

    public function scopeCari($query, $s)
    {
        if($s){
            return $query->where('spesialis_cd', 'ilike', "%$s%")->orWhere('spesialis_nm', 'ilike', "%$s%");
        }
    }

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
