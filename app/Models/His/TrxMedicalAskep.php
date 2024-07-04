<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalAskep
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string askep_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property string dr_cd
 * @property string file_report
 * @property string medical_note
 * @property string payment_st
 * @property string kelas_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalAskep extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_askep';






    protected $primaryKey = 'medical_askep_seqno';

    public $fillable = [
        'medical_cd',
        'askep_cd',
        'datetime_trx',
        'dr_cd',
        'file_report',
        'medical_note',
        'payment_st',
        'kelas_cd',
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
        'askep_cd' => 'string',
        'dr_cd' => 'string',
        'file_report' => 'string',
        'medical_note' => 'string',
        'payment_st' => 'string',
        'kelas_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'askep_cd',
        'datetime_trx',
        'dr_cd',
        'file_report',
        'medical_note',
        'payment_st',
        'kelas_cd',
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
