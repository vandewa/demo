<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCob
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string insurance_cd
 * @property decimal amount_persen
 * @property decimal amount_angka
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxCob extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_cob';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'insurance_cd',
        'amount_persen',
        'amount_angka',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'insurance_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'insurance_cd',
        'amount_persen',
        'amount_angka',
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
