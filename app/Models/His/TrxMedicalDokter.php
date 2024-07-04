<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalDokter
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string dr_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property string medical_note
 * @property string trx_dr_tp
 * @property string kelas_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalDokter extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_dokter';






    protected $primaryKey = 'medical_dr_seqno';

    public $fillable = [
        'medical_cd',
        'dr_cd',
        'datetime_trx',
        'medical_note',
        'trx_dr_tp',
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
        'dr_cd' => 'string',
        'medical_note' => 'string',
        'trx_dr_tp' => 'string',
        'kelas_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'dr_cd',
        'datetime_trx',
        'medical_note',
        'trx_dr_tp',
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
