<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxDokterSpesialis
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string spesialis_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxDokterSpesialis extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_dokter_spesialis';






    protected $primaryKey = 'dr_cd';

    public $fillable = [
        'spesialis_cd',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dr_cd' => 'string',
        'spesialis_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'spesialis_cd',
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
