<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxQueue
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string pasien_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property integer queue_no
 * @property string|\Carbon\Carbon estimate_time
 * @property string medical_tp
 * @property string dr_cd
 * @property string medical_unit
 * @property string kelas_cd
 * @property bigInteger jadwal_seqno
 * @property string queue_st
 * @property string referensi_cd
 * @property string visit_tp
 * @property string rs_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxQueue extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_queue';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'pasien_cd',
        'datetime_trx',
        'queue_no',
        'estimate_time',
        'medical_tp',
        'dr_cd',
        'medical_unit',
        'kelas_cd',
        'jadwal_seqno',
        'queue_st',
        'referensi_cd',
        'visit_tp',
        'rs_cd',
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
        'queue_no' => 'integer',
        'medical_tp' => 'string',
        'dr_cd' => 'string',
        'medical_unit' => 'string',
        'kelas_cd' => 'string',
        'queue_st' => 'string',
        'referensi_cd' => 'string',
        'visit_tp' => 'string',
        'rs_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pasien_cd',
        'datetime_trx',
        'queue_no',
        'estimate_time',
        'medical_tp',
        'dr_cd',
        'medical_unit',
        'kelas_cd',
        'jadwal_seqno',
        'queue_st',
        'referensi_cd',
        'visit_tp',
        'rs_cd',
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
