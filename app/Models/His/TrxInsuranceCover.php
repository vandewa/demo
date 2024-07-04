<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxInsuranceCover
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string insurance_cd
 * @property string tarif_tp
 * @property string cover_st
 * @property decimal cover_max
 * @property decimal persen_asuransi
 * @property decimal persen_pasien
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxInsuranceCover extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_insurance_cover';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'insurance_cd',
        'tarif_tp',
        'cover_st',
        'cover_max',
        'persen_asuransi',
        'persen_pasien',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'insurance_cd' => 'string',
        'tarif_tp' => 'string',
        'cover_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'insurance_cd',
        'tarif_tp',
        'cover_st',
        'cover_max',
        'persen_asuransi',
        'persen_pasien',
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
