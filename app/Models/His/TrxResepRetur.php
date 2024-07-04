<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxResepRetur
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string medical_cd
 * @property string pasien_cd
 * @property string pasien_nm
 * @property string|\Carbon\Carbon retur_date
 * @property bigInteger ref_medical_resep_seqno
 * @property bigInteger ref_medical_alkes_seqno
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxResepRetur extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_resep_retur';






    protected $primaryKey = 'retur_seqno';

    public $fillable = [
        'medical_cd',
        'pasien_cd',
        'pasien_nm',
        'retur_date',
        'ref_medical_resep_seqno',
        'ref_medical_alkes_seqno',
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
        'pasien_cd' => 'string',
        'pasien_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'pasien_cd',
        'pasien_nm',
        'retur_date',
        'ref_medical_resep_seqno',
        'ref_medical_alkes_seqno',
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
