<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxPasienInsurance
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string pasien_cd
 * @property string insurance_cd
 * @property string insurance_member_cd
 * @property string insurance_tp
 * @property string insurance_no
 * @property string insurance_no_trx
 * @property string standar_kelas_cd
 * @property string default_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string|\Carbon\Carbon expired_date
 */
class TrxPasienInsurance extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_pasien_insurance';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'pasien_cd',
        'insurance_cd',
        'insurance_member_cd',
        'insurance_tp',
        'insurance_no',
        'insurance_no_trx',
        'standar_kelas_cd',
        'default_st',
        'modi_id',
        'modi_datetime',
        'expired_date',
        'bpjs_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pasien_cd' => 'string',
        'insurance_cd' => 'string',
        'insurance_member_cd' => 'string',
        'insurance_tp' => 'string',
        'insurance_no' => 'string',
        'insurance_no_trx' => 'string',
        'standar_kelas_cd' => 'string',
        'default_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pasien_cd',
        'insurance_cd',
        'insurance_member_cd',
        'insurance_tp',
        'insurance_no',
        'insurance_no_trx',
        'standar_kelas_cd',
        'default_st',
        'modi_id',
        'modi_datetime',
        'expired_date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function insurance()
    {
      return $this->hasOne('App\Models\His\TrxInsurance','insurance_cd','insurance_cd');
    }
}
