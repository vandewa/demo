<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalAnamnesa
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property bigInteger medical_record_seqno
 * @property string anamnesa_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalAnamnesa extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_anamnesa';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'medical_record_seqno',
        'anamnesa_cd',
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
        'anamnesa_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'medical_record_seqno',
        'anamnesa_cd',
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
