<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxIcdAnamnesa
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string icd_cd
 * @property string anamnesa_cd
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxIcdAnamnesa extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_icd_anamnesa';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'icd_cd',
        'anamnesa_cd',
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
        'icd_cd' => 'string',
        'anamnesa_cd' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'icd_cd',
        'anamnesa_cd',
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
