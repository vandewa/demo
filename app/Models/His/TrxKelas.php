<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxKelas
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string kelas_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property integer kelas_urut
 */
class TrxKelas extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'trx_kelas';
    protected $primaryKey = 'kelas_cd';
    protected $guarded = [];
    public $incrementing = false;
    public $keyType = 'string';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kelas_cd' => 'string',
        'kelas_nm' => 'string',
        'modi_id' => 'string',
        'kelas_urut' => 'integer'
    ];

    protected static $logAttributes = [
        'kelas_nm',
        'modi_id',
        'modi_datetime',
        'kelas_urut'
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
            return $query->where('kelas_cd', 'ilike', "%$s%")->orWhere('kelas_nm', 'ilike', "%$s%");
        }
    }


}