<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxTarifTp
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property string tariftp_nm
 * @property decimal tarif_total
 * @property string tarif_tp
 * @property bigInteger trx_tarif_seqno
 * @property string insurance_cd
 * @property string kelas_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxTarifTp extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_tarif_tp';






    protected $primaryKey = 'tariftp_no';

    public $fillable = [
        'tariftp_nm',
        'tarif_total',
        'tarif_tp',
        'trx_tarif_seqno',
        'insurance_cd',
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
        'tariftp_nm' => 'string',
        'tarif_tp' => 'string',
        'insurance_cd' => 'string',
        'kelas_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'tariftp_nm',
        'tarif_total',
        'tarif_tp',
        'trx_tarif_seqno',
        'insurance_cd',
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
