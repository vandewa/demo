<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxPasienRmtrack
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string|\Carbon\Carbon datetime_trx
 * @property string penerima_nm
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxPasienRmtrack extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_pasien_rmtrack';






    protected $primaryKey = 'pasien_cd';

    public $fillable = [
        'datetime_trx',
        'penerima_nm',
        'note',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pasien_cd' => 'string',
        'penerima_nm' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'datetime_trx',
        'penerima_nm',
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


}
