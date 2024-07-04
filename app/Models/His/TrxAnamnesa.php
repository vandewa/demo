<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxAnamnesa
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string anamnesa_root
 * @property string anamnesa_nm
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxAnamnesa extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_anamnesa';






    protected $primaryKey = 'anamnesa_cd';

    public $fillable = [
        'anamnesa_root',
        'anamnesa_nm',
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
        'anamnesa_cd' => 'string',
        'anamnesa_root' => 'string',
        'anamnesa_nm' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'anamnesa_root',
        'anamnesa_nm',
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
