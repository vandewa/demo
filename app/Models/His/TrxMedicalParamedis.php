<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalParamedis
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property bigInteger ref_proses_seqno
 * @property string dr_cd
 * @property string paramedis_cd
 * @property string paramedis_role
 * @property string proses_tp
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalParamedis extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_paramedis';

    protected $guarded = [];
    protected $primaryKey = 'seq_no';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dr_cd' => 'string',
        'paramedis_cd' => 'string',
        'paramedis_role' => 'string',
        'proses_tp' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'ref_proses_seqno',
        'dr_cd',
        'paramedis_cd',
        'paramedis_role',
        'proses_tp',
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

    public function dokter()
    {
        return $this->belongsTo(TrxDokter::class,'dr_cd');
    }
    public function paramedisDokter()
    {
        return $this->belongsTo(TrxDokter::class,'paramedis_cd');
    }

    public function paramedis()
    {
        return $this->belongsTo(TrxParamedis::class, 'paramedis_cd');
    }
    public function peran()
    {
        return $this->belongsTo(ComCode::class , 'paramedis_role');
    }


}
